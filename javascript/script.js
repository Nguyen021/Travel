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

var swiper = new Swiper(".reviews-slider", {
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

// handle in package page
let loadMoreBtn = document.querySelector(".packages-page .load-more .btn");
let currentItem = 3;

loadMoreBtn.onclick = () => {
  let boxs = [
    ...document.querySelectorAll(".packages-page .box-container .box"),
  ];
  for (var item = currentItem; item < currentItem + 3; item++) {
    boxs[item].style.display = "inline-block";
  }
  currentItem += 3;
  if (currentItem >= boxs.length) {
    loadMoreBtn.style.display = "none";
  }
};
