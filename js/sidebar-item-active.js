const menuItems = document.querySelectorAll('.sidebar-container .nav-link');
const cookieName = 'activeMenuItem';
let activeIndex = -1;

// Get the index of the previously active item from the cookie
const cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)activeMenuItem\s*\=\s*([^;]*).*$)|^.*$/, "$1");
if (cookieValue) {
    const [index, page] = cookieValue.split(':');
    if (window.location.pathname.endsWith(page)) {
        activeIndex = parseInt(index);
    } else {
        document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    }
}

// Set the active class on the previously active item
if (activeIndex >= 0 && activeIndex < menuItems.length) {
    menuItems[activeIndex].classList.add('active');
} else {
    menuItems[0].classList.add('active');
}

menuItems.forEach((item, index) => {
    if (item.href === window.location.href) {
        // Set the active class on the current item
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
        activeIndex = index;

        // Set the active item index and page in the cookie
        document.cookie = `${cookieName}=${activeIndex}:${window.location.pathname}; path=/`;
    } else if (window.location.pathname === item.getAttribute('data-page')) {
        // Set the active class on the item with matching page
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
        activeIndex = index;

        // Set the active item index and page in the cookie
        document.cookie = `${cookieName}=${activeIndex}:${window.location.pathname}; path=/`;
    }
    item.addEventListener('click', () => {
        // Set the active class on the clicked item
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        item.classList.add('active');
        activeIndex = index;

        // Set the active item index and page in the cookie
        document.cookie = `${cookieName}=${activeIndex}:${window.location.pathname}; path=/`;
    });
});

// Delete the cookie when the user navigates to a different page
window.addEventListener('unload', () => {
    const currentPage = window.location.pathname;
    if (!currentPage.endsWith('html_page.php') || currentPage.endsWith('js_page.php')) {
        document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    } else {
        const cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)activeMenuItem\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        if (cookieValue) {
            const [index, page] = cookieValue.split(':');
            if (!currentPage.endsWith(page)) {
                document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
            }
        }
    }
});