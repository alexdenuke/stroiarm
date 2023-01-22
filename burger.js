let burger = document.querySelector('.header__burger');
let menu = document.querySelector('.header__burger-menu');

burger.addEventListener('click', () => {
  menu.classList.toggle('active');
  document.body.classList.toggle("lock");
})