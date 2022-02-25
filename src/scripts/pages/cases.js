import gsap from 'gsap'
import Swiper, { Navigation } from 'swiper';

import Scroll from '../utils/scroll'

const pageurl = document.querySelector('body').id

Swiper.use([Navigation]);

if(pageurl == 'cases'){

    const swiperCases = new Swiper('.swiper-cases', {
      slidesPerView: 3,
      loop: true,
      centerInsufficientSlides: true,
      centeredSlides: true,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      breakpoints: {
        320: {
          slidesPerView: 'auto',
          spaceBetween: 20
        },

        1200: {
          slidesPerView: 3,
        }

        
      },
    });
}