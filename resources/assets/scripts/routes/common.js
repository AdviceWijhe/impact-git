export default {
  init() {


    // MOBILE NAVIGATION
    let fullmenuButton = document.querySelector('.hamburger');
    let fullmenu = document.querySelector('#fullmenu');

    fullmenuButton.addEventListener('click', function () {
      if (this.classList.contains('is-active')) {
        this.classList.remove('is-active');
        fullmenu.classList.remove('open');
      } else {
        this.classList.add('is-active');
        fullmenu.classList.add('open');
      }
    });

    /** Code By Webdevtrick ( https://webdevtrick.com )  **/
    $('input').on('focusin', function () {
      $(this).parent().parent().find('label').addClass('active');
    });

    $('input').on('focusout', function () {
      if (!this.value) {
        $(this).parent().parent().find('label').removeClass('active');
      }
    });

    // MOBILE MENU
    let menuItems = document.querySelectorAll('#fullmenu li.menu-item-has-children > a');
    // let menuArray = menuItems.prototype.slice.call(nodelist).filter;

    for (let x = 0; x < menuItems.length; x++) {
      menuItems[x].addEventListener('click', (e) => {
        e.preventDefault();

        if (menuItems[x].parentElement.classList.contains('open')) {
          menuItems[x].parentElement.classList.remove('open');
        } else {

          menuItems[x].parentElement.classList.add('open');
        }
      });
    }


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
