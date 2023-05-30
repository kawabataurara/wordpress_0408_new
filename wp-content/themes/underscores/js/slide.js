"use strict";

// スライドショー
const options = {
  perMove: 1,
  gap: 16,
  cover: true,
  heightRatio: 0.5,
  fixedHeight: "80vh",
  updateOnMove: true,
  pagination: false,
  arrows: false,
  autoplay: true,
  interval: 3000,
  type: "fade",
  rewind: true,
};

const splide = new Splide(".splide", options);
splide.mount();
