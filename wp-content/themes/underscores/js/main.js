"use strict";

// 追加

// メニュー展開時に背景を固定
const backgroundFix = (bool) => {
  const scrollingElement = () => {
    const browser = window.navigator.userAgent.toLowerCase();
    if ("scrollingElement" in document) return document.scrollingElement;
    return document.documentElement;
  };

  const scrollY = bool
    ? scrollingElement().scrollTop
    : parseInt(document.body.style.top || "0");

  const fixedStyles = {
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,
    left: "0",
    width: "100vw"
  };

  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = bool ? fixedStyles[key] : "";
  });

  if (!bool) {
    window.scrollTo(0, scrollY * -1);
  }
};

// 変数定義
const CLASS = "open-active";
let flg = false;
let accordionFlg = false;

let humberger = document.getElementById("js_humberger");
let focusTrap = document.getElementById("js_focus-trap");
let menu = document.querySelector(".js_nav-area");
let accordionTrigger = document.querySelectorAll(".js_sp_accordion-trigger");
let accordion = document.querySelectorAll(".js_sp-accordion");

// メニュー開閉制御
humberger.addEventListener("click", (e) => { //ハンバーガーボタンが選択されたら
  e.currentTarget.classList.toggle(CLASS);
  menu.classList.toggle(CLASS);
  if (flg) {// flgの状態で制御内容を切り替え
    backgroundFix(false);
    humberger.setAttribute("aria-expanded", "false");
    humberger.focus();
    flg = false;
  } else {
    backgroundFix(true);
    humberger.setAttribute("aria-expanded", "true");
    flg = true;
  }
});
window.addEventListener("keydown", () => {　//escキー押下でメニューを閉じられるように
  if (event.key === "Escape") {
    humberger.classList.remove(CLASS);
    menu.classList.remove(CLASS);

    backgroundFix(false);
    humberger.focus();
    humberger.setAttribute("aria-expanded", "false");
    flg = false;
  }
});



// メニュー内アコーディオン制御
accordionTrigger.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle(CLASS);
    e.currentTarget.nextElementSibling.classList.toggle(CLASS);
    if (accordionFlg) {
      e.currentTarget.setAttribute("aria-expanded", "false");
      accordionFlg = false;
    } else {
      e.currentTarget.setAttribute("aria-expanded", "true");
      accordionFlg = true;
    }
  });

});

// フォーカストラップ制御
focusTrap.addEventListener("focus", (e) => {
  humberger.focus();
});


// タブ
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

// フェードイン
const targets = document.querySelectorAll(".js_fadeIn");

function callback(entries, obs) {
  console.log(entries);

  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    }

    entry.target.classList.add("appear");
    obs.unobserve(entry.target);
  });
}

const options2 = {
  threshold: 0,
  rootMargin: "0px 0px",
};

const observer = new IntersectionObserver(callback, options2);

targets.forEach((target) => {
  observer.observe(target);
});
