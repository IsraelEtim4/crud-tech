const menu = document.querySelector('#mobile-menu');
const menuLInk = document.querySelector('.navbar_menu');

// Display mobile menu
const mobileMenu = () => {
  menu.classList.toggle('is-active');
  menuLInk.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);