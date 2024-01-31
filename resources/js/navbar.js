export function navDropdown() {
  document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector('.js-header-menu');
    const menuIcon = document.querySelector('.js-header-menu-icon')
    const navbar = document.querySelector('.js-header-navbar');

    menuToggle.addEventListener('click', function(e) {
      navbar.classList.toggle('header__navbar--active');
      menuIcon.classList.toggle('menu--active')
    })

    document.addEventListener('click', function(e) {
      const menuActive = document.querySelector('.header__navbar--active');
      if (menuActive) {
        if (!navbar.contains(e.target) && !menuToggle.contains(e.target)) {
          navbar.classList.remove('header__navbar--active');
          menuIcon.classList.remove('menu--active')
        }
      }
    })
  })
}
