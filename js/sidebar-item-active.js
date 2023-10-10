const menuItems = document.querySelectorAll('.sidebar-container .nav-link');

menuItems[0].classList.add('active');

menuItems.forEach(item => {
    if (item.href === window.location.href) {
        item.classList.add('active');
    }
    item.addEventListener('click', () => {
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
    });
});