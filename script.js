let burger = document.querySelector('.header__burger');
let menu = document.querySelector('.header__burger-menu');

burger.addEventListener('click', () => {
  menu.classList.toggle('active');
  document.body.classList.toggle("lock");
})

const sliders = document.querySelector('.swiper');

new Swiper(sliders, {
  direction: 'horizontal',
  loop: true,


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  slidesPerView: 3,
  spaceBetween: 50,
});



