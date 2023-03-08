$(function () {
  // aos animation initialisation
  AOS.init({
    duration: 2000,
    once: true,
  });

  // scroll header script here
  window.onscroll = function () {
    scrollHeader();
  };
  // Get the header
  var header = $(".navbar-bottom");
  var body = $("body");
  function scrollHeader() {
    // adding sticky class
    if (window.pageYOffset > 130) {
      $(header).addClass("sticky");
    } else {
      // removing sticky class
      $(header).removeClass("sticky");
    }
  }

  // navbar toggler script
  $(".navbar-toggler").on("click", function () {
    $(".collapse").toggleClass("show");
    $("body").toggleClass("layer-open");
    // $(header).toggleClass("sticky-not");
    $(".navbar-close").show();
  });
  $(".navbar-close").on("click", function () {
    $(".collapse").toggleClass("show");
    $(".navbar-close").hide();
    $("body").toggleClass("layer-open");
    // $(header).toggleClass("sticky-not");
    $(".dark-overlay").click(function () {
      $(".collapse").removeClass("show");
      $("body").removeClass("layer-open");
    });
  });

  // $(".navbar-bottom  .navbar-nav a").on("click", function() {
  //   $(".navbar-bottom  .navbar-nav")
  //     .find("li.active")
  //     .removeClass("active");
  //   $(this)
  //     .parent("li")
  //     .addClass("active");
  // });

  $("html").easeScroll({
    frameRate: 60,
    animationTime: 1000,
    stepSize: 40,
    pulseAlgorithm: 1,
    pulseScale: 8,
    pulseNormalize: 1,
    accelerationDelta: 100,
    accelerationMax: 1,
    keyboardSupport: true,
    arrowScroll: 50,
    touchpadSupport: true,
    fixedBackground: true,
  });
});

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

removeBanner = () => {
  document.querySelector(".flash-news-banner").remove();
};
