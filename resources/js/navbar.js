document.addEventListener("DOMContentLoaded", function() {
    var menuToggle = document.querySelector('.header__menu');
    var navbar = document.querySelector('.header__navbar');
    var menuIcon = document.querySelector('.header__menu__icon')
      // Your code here
      menuToggle.addEventListener('click', function(e) {
          navbar.classList.toggle('header__navbar--active');
          menuIcon.classList.toggle('menu--active')
      })

      document.addEventListener('click', function(e) {
        var menuActive = document.querySelector('.header__navbar--active');
        if (menuActive) {
          if (!navbar.contains(e.target) && !menuToggle.contains(e.target)) {
            navbar.classList.remove('header__navbar--active');
            menuIcon.classList.remove('menu--active')
        }
        }
      })
    })
