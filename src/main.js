import "./styles/qulmee2025.scss"; 
import "./js/common.js"; 

// core部分とモジュールを読み込み
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

// スタイルも読み込み（これを忘れると何も表示されない）
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// モジュールをSwiperに登録
Swiper.use([Navigation, Pagination]);

const aboutSwiper = new Swiper(".about-swiper", {
  slidesPerView: 1, // 初期状態
  spaceBetween: 20,
  grabCursor: true,
  centeredSlides: true,
  allowTouchMove: true,
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 50,
      centeredSlides: false,
    },
  },
});