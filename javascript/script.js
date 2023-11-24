let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

var swiper = new Swiper(".home-slider", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
});

// var swiper = new Swiper(".home-slider", {
//   scrollbar: {
//     el: ".swiper-scrollbar",
//     hide: true,
//   },
//   loop: true,
//   autoplay: {
//     delay: 1000,
//     disableOnInteraction: true,
//   },
// });