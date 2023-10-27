document.addEventListener('DOMContentLoaded', function() {
    const acceptedCookies = localStorage.getItem('acceptedCookies');
    
    if (!acceptedCookies) {
        showCookiePopup();
    }
    
    document.getElementById('accept-cookies').addEventListener('click', function () {
        hideCookiePopup();
        localStorage.setItem('acceptedCookies', 'true');
    });
});

function showCookiePopup() {
    const popup = document.getElementById('cookie-popup');
    if (popup) {
        popup.style.display = 'block';
    }
}

function hideCookiePopup() {
    const popup = document.getElementById('cookie-popup');
    if (popup) {
        popup.style.display = 'none';
    }
}
