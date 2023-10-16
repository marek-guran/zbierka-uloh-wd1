function addEvent(el, type, fn) {
    if (el.addEventListener) {
        el.addEventListener(type, fn, false);
    } else if (el.attachEvent) {
        el.attachEvent('on' + type, function () { return fn.call(el, window.event); });
    }
}

(function () {
    var pre = document.createElement('pre');
    pre.id = 'view-source';
    addEvent(window, 'click', function (event) {
        if (event.target.hash == '#view-source') {
            if (!document.getElementById('view-source')) {
                pre.innerHTML = ('<!DOCTYPE html>\n<html>\n' + document.documentElement.innerHTML + '\n</html>').replace(/[<>]/g, function (m) { return { '<': '&lt;', '>': '&gt;' }[m] });
                document.body.appendChild(pre);
            }
            document.body.className = 'view-source';
            var sourceTimer = setInterval(function () {
                if (window.location.hash != '#view-source') {
                    clearInterval(sourceTimer);
                    document.body.className = '';
                }
            }, 200);
        }
    });
})();

var links = document.querySelectorAll('li > a');
for (var i = 0; i < links.length; i++) {
    var el = links[i];
    el.setAttribute('draggable', 'true');
    addEvent(el, 'dragstart', function (e) {
        e.dataTransfer.effectAllowed = 'copy';
        e.dataTransfer.setData('Text', this.id);
    });
}

var bin = document.querySelector('#bin');
addEvent(bin, 'dragover', function (e) {
    e.preventDefault();
    this.classList.add('over');
    e.dataTransfer.dropEffect = 'copy';
});
addEvent(bin, 'dragenter', function (e) {
    this.classList.add('over');
});
addEvent(bin, 'dragleave', function () {
    this.classList.remove('over');
});
addEvent(bin, 'drop', function (e) {
    e.preventDefault();
    var el = document.getElementById(e.dataTransfer.getData('Text'));
    el.parentNode.removeChild(el);
    this.classList.remove('over');
    var eat = ['mňam!', 'ešte', 'fuj!', 'blee'];
    var yum = document.createElement('p');
    yum.style.opacity = 1;
    yum.innerHTML = eat[parseInt(Math.random() * eat.length)];
    var y = yum.cloneNode(true);
    this.appendChild(y);
    setTimeout(function () {
        var t = setInterval(function () {
            if (y.style.opacity <= 0) {
                y.style.display = 'none';
                clearInterval(t);
            } else {
                y.style.opacity -= 0.1;
            }
        }, 50);
    }, 250);
});