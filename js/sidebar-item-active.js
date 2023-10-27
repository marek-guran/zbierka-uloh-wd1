const menuItems = document.querySelectorAll('.sidebar-container .nav-link');
const cookieName = 'activeMenuItem';
let activeIndex = -1;

const urlParams = new URLSearchParams(window.location.search);
const prNumber = urlParams.get('pr');

if (prNumber !== null) {
    activeIndex = parseInt(prNumber);
}

if (activeIndex >= 0 && activeIndex < menuItems.length) {
    menuItems[activeIndex].classList.add('active');
} else {
    menuItems[0].classList.add('active');
}

menuItems.forEach((item, index) => {
    if (item.href === window.location.href) {
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
        activeIndex = index;

        document.cookie = `${cookieName}=${activeIndex}:${window.location.pathname}; path=/`;
    } else if (window.location.pathname === item.getAttribute('data-page')) {
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
        activeIndex = index;

        document.cookie = `${cookieName}=${activeIndex}:${window.location.pathname}; path=/`;
    }
    item.addEventListener('click', () => {
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
        activeIndex = index;

        document.cookie = `${cookieName}=${activeIndex}:${window.location.pathname}; path=/`;
    });
});
