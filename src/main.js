import "./styles/qulmee2025.scss";
import "./js/common.js";

// // core部分とモジュールを読み込み
// import Swiper from "swiper";
// import { Navigation, Pagination } from "swiper/modules";

// // スタイルも読み込み（これを忘れると何も表示されない）
// import "swiper/css";
// import "swiper/css/navigation";
// import "swiper/css/pagination";

// // モジュールをSwiperに登録
// Swiper.use([Navigation, Pagination]);

const aboutSwiper = new Swiper(".about-swiper", {
  loop: true,
  speed: 8000, // スライド1枚分の移動にかかる時間
  slidesPerView: 1,
  spaceBetween: 50,
  autoplay: {
    delay: 0, // 間隔なしで連続自動再生
    disableOnInteraction: false, // ユーザー操作後も止まらない
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: "auto",
      spaceBetween: 50,
    },
    1400: {
      slidesPerView: "auto",
      spaceBetween: 50,
    },
  },
});

//SPだけスライダー
let spSwiper = null;

function toggleSwiper() {
  const isSp = window.innerWidth <= 1024;

  if (isSp && !spSwiper) {
    spSwiper = new Swiper(".about-sp-swiper", {
      slidesPerView: "auto",
      spaceBetween: 20,
      grabCursor: true,
      centeredSlides: true,
      allowTouchMove: true,
      centeredSlides: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  } else if (!isSp && spSwiper) {
    spSwiper.destroy(true, true); // 完全に破棄
    spSwiper = null;

    // Swiperが追加した余計なstyleを削除
    const wrapper = document.querySelector(".about-sp-swiper .swiper-wrapper");
    if (wrapper) {
      wrapper.removeAttribute("style");
    }

    document.querySelectorAll(".swiper-slide").forEach((slide) => {
      slide.removeAttribute("style");
    });
  }
}

// 初期化
toggleSwiper();

// リサイズ時に切り替え
window.addEventListener("resize", toggleSwiper);


//MODAL
document.querySelectorAll(".show-modal").forEach((trigger) => {
  trigger.addEventListener("click", function (e) {
    e.stopPropagation();
    const modalId = this.getAttribute("data-modal");
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.add("is-visible");
    }
  });
});

// 背景クリックで閉じる（modal-cont自体がクリックされたとき）
document.querySelectorAll(".modal-cont").forEach((modal) => {
  modal.addEventListener("click", function (e) {
    if (e.target === this) {
      this.classList.remove("is-visible");
    }
  });
});

// 閉じるボタンで閉じる
document.querySelectorAll(".close-modal").forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.stopPropagation();
    this.closest(".modal-cont").classList.remove("is-visible");
  });
});

// ESCキーで閉じる
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    document.querySelectorAll(".modal-cont.is-visible").forEach((modal) => {
      modal.classList.remove("is-visible");
    });
  }
});
