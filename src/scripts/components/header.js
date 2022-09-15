const menuItems = document.querySelectorAll('.menu-item-has-children');

for (const menuItem of menuItems) {
    menuItem.addEventListener('click', function(event) {
        event.preventDefault();
        menuItem.classList.toggle('menu-item-has-children--active');

        if (window.matchMedia("(max-width: 768px)").matches) {
            var panel = menuItem.querySelector('.dropdown-menu');
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    });
}