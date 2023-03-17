// for swiper
var mySwiper = new Swiper("#slider-container", {
  loop: true,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// make max lenght to noews title
const sliderTewsTitle = document.getElementsByClassName("news-title");
const max_length = 150;

for (let i = 0; i < sliderTewsTitle.length; i++) {
  if (sliderTewsTitle[i].textContent.length > max_length) {
    const truncatedText =
      sliderTewsTitle[i].textContent.slice(0, max_length) + "...";
    sliderTewsTitle[i].textContent = truncatedText;
  }
}
