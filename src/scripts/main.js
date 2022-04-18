const selectors = {
  menuToggles: '.toggle_menu',
  mobileMenu: '#mobile_menu',
  overlay: '#overlay',
  popup: '#site_popup',
  tabbedItems: '.tabbed_toggle',
  tabbedPanels: '.tab_panel'
}

const objects = {
  objMenuToggles: document.querySelectorAll(selectors.menuToggles),
  mobileMenu: document.querySelector(selectors.mobileMenu),
  overlay: document.querySelector(selectors.overlay),
  popup: document.querySelector(selectors.popup),
  tabbedItems: document.querySelectorAll(selectors.tabbedItems),
  tabbedPanels: document.querySelectorAll(selectors.tabbedPanels)
}

for (const tabbedItem of objects.tabbedItems) {
  tabbedItem.addEventListener('click', function(){
    var thisItem = tabbedItem.getAttribute('data-tab');
    for (const tabbedPanel of tabbedPanels) {
      tabbedPanel.classList.remove('is-active');
    }
    for (const tabbedItemInner of objects.tabbedItems) {
      tabbedItemInner.classList.remove('is-active');
    }
    tabbedItem.classList.add('is-active')
    document.getElementById('tab-panel-' + thisItem).classList.add('is-active');
  });
}

for (const menuToggle of objects.objMenuToggles) {
  menuToggle.addEventListener('click', function(){
    objects.mobileMenu.classList.toggle('is-active');
    objects.overlay.classList.toggle('is-active');
  });
}

objects.overlay.addEventListener('click', function(){
  objects.mobileMenu.classList.toggle('is-active');
  objects.overlay.classList.toggle('is-active');
  if (objects.popup != null) {
    objects.popup.classList.toggle('is-active');
  }
});