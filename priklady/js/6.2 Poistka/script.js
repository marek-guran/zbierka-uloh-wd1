document.addEventListener("DOMContentLoaded", function () {
    setInterval(function () {
        document.getElementById('popup').classList.add('show');
    }, 5000);
});

function closePopup() {
    document.getElementById('popup').classList.remove('show');
}
