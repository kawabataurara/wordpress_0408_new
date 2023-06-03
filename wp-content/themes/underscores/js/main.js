"use strict";

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
