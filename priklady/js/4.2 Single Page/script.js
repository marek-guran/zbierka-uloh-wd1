document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', event => {
        document.querySelectorAll('.section').forEach(sec => {
            sec.classList.remove('active');
        });
        document.getElementById(event.target.dataset.target).classList.add('active');
    });
});