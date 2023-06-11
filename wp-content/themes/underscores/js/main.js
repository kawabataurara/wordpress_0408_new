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

document.addEventListener(
  "DOMContentLoaded",
  function () {
    // タブに対してクリックイベントを適用
    const tabs = document.getElementsByClassName("tab");
    for (let i = 0; i < tabs.length; i++) {
      tabs[i].addEventListener("click", tabSwitch, false);
    }

    // タブをクリックすると実行する関数
    function tabSwitch() {
      // タブのclassの値を変更
      document
        .getElementsByClassName("is-active")[0]
        .classList.remove("is-active");
      this.classList.add("is-active");
      // コンテンツのclassの値を変更
      document.getElementsByClassName("is-show")[0].classList.remove("is-show");
      const arrayTabs = Array.prototype.slice.call(tabs);
      const index = arrayTabs.indexOf(this);
      document.getElementsByClassName("panel")[index].classList.add("is-show");
    }
  },
  false
);
