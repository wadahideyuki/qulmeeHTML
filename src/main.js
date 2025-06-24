import "./styles/qulmee2025.scss";
import "./js/common.js";

// core部分とモジュールを読み込み
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

// スタイルも読み込み（これを忘れると何も表示されない）
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

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

//SPだけスライダー
let spSwiper = null;
function toggleSwiper() {
  const isSp = window.innerWidth <= 1024;

  if (isSp && !spSwiper) {
    spSwiper = new Swiper(".about-sp-swiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      grabCursor: true,
      centeredSlides: true,
      allowTouchMove: true,
    });
  } else if (!isSp && spSwiper) {
    spSwiper.destroy(true, true); // 完全に破棄
    spSwiper = null;

    // 🔧 Swiperが追加した余計なstyleを削除
    const wrapper = document.querySelector(".about-sp-swiper .swiper-wrapper");
    if (wrapper) {
      wrapper.removeAttribute("style");
    }

    // 🔧 スライドにもstyleが残っている場合があるので念のため削除
    document.querySelectorAll(".swiper-slide").forEach((slide) => {
      slide.removeAttribute("style");
    });
  }
}

// 初期化
toggleSwiper();

// リサイズ時に切り替え
window.addEventListener("resize", toggleSwiper);
