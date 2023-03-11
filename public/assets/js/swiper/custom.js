// for swiper
var mySwiper = new Swiper("#slider-container", {
  loop: true,
  autoplay: {
    delay: 1000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    init: function () {
      // Hide navigation arrows by default
      document.querySelector(".swiper-button-next").style.display = "none";
      document.querySelector(".swiper-button-prev").style.display = "none";
    },
    mouseenter: function () {
      // Show navigation arrows on mouseenter
      document.querySelector(".swiper-button-next").style.display = "block";
      document.querySelector(".swiper-button-prev").style.display = "block";
    },
    mouseleave: function () {
      // Hide navigation arrows on mouseleave
      document.querySelector(".swiper-button-next").style.display = "none";
      document.querySelector(".swiper-button-prev").style.display = "none";
    },
  },
});
