document.addEventListener("DOMContentLoaded", function () {
  const swiperElement = document.getElementById("servicesSwiper");

  if (swiperElement) {
    const swiper = new Swiper(swiperElement, {
      loop: true,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      speed: 3000,

      // 👇ここを修正
      slidesPerView: 3, // 一度に3つのスライドを表示
      spaceBetween: 10, // スライド間の余白を30pxに
      // 👆ここまで

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      // 👇レスポンシブ設定も修正
      breakpoints: {
        // 画面幅が320px以上の場合
        320: {
          slidesPerView: 1.5,
          spaceBetween: 10,
        },
        // 画面幅が768px以上の場合
        768: {
          slidesPerView: 2.5,
          spaceBetween: 20,
        },
        // 画面幅が1024px以上の場合
        1024: {
          slidesPerView: 3.5,
          spaceBetween: 30,
        },
      },
      // 👆ここまで
    });
  }
});
