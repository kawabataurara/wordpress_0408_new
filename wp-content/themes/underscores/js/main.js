"use strict";

// スライドショー
// const options = {
//   perMove: 1,
//   gap: 16,
//   cover: true,
//   heightRatio: 0.5,
//   fixedHeight: "80vh",
//   updateOnMove: true,
//   pagination: false,
//   arrows: false,
//   autoplay: true,
//   interval: 3000,
//   type: "fade",
//   rewind: true,
// };

// const splide = new Splide(".splide", options);
// splide.mount();

// ハンバーガーメニュー
const header = document.getElementById("js-header");
const menu = document.getElementById("js-btn");
menu.addEventListener("click", () => {
  header.classList.toggle("open");
});

// SP版アコーディオンメニュー
const qaElements = document.querySelectorAll(".init-bottom");
function acToggle() {
  const content = this.nextElementSibling;
  content.classList.toggle("is-open");
  this.classList.toggle("is-open");
}

for (let i = 0; i < qaElements.length; i++) {
  qaElements[i].addEventListener("click", acToggle);
}
