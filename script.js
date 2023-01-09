let burger = document.querySelector('.header__burger');
let menu = document.querySelector('.header__burger-menu');

burger.addEventListener('click', () => {
  menu.classList.toggle('active');
  document.body.classList.toggle("lock");
})

const slider = document.querySelector('.swiper');

new Swiper(slider, {
  direction: 'horizontal',
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  slidesPerView: 1,
  // spaceBetween: 50,
  // centerInsufficientSlides: false,
  grabCursor: true,
  breakpoints: {
    800: {
      slidesPerView: 3,
    },
    450: {
      slidesPerView: 2,
    }
  }
});



