const menuItems = document.querySelectorAll('.sidebar-container .nav-link');

menuItems[0].classList.add('active');

menuItems.forEach((item, index) => {
    if (item.href === window.location.href) {
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
    } else if (window.location.href.includes('css-animacie2') && index === 8) {
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
    }
    item.addEventListener('click', () => {
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
    });
});