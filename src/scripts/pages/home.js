import gsap from 'gsap'
import Swiper, { Autoplay } from 'swiper';

const pageurl = document.querySelector('body').id

Swiper.use([Autoplay]);

if(pageurl == 'home'){

    const swiperProdutividade = new Swiper('.swiper-banner', {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 2000,
      },

      breakpoints: {
        320: {
          slidesPerView: 'auto',
          spaceBetween: 20
        },

        992: {
          slidesPerView: 2,
          spaceBetween: 40,
        },

        1200: {
          slidesPerView: 1,
          spaceBetween: 40,
        }
      },
    });
}