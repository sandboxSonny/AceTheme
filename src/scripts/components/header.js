const menuItems = document.querySelectorAll('.menu-item-has-children');

for (const menuItem of menuItems) {
    menuItem.addEventListener('click', function(event) {
        event.preventDefault();
        menuItem.classList.toggle('menu-item-has-children--active');
    });
}