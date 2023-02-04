const slider = document.querySelector("#slider");
const sliderContainer = slider.querySelector(".slider-container");
const images = sliderContainer.querySelectorAll("img");

let index = 0;

function changeSlide() {
  sliderContainer.style.left = `-${index * 100}%`;
}

setInterval(() => {
  index++;
  if (index === images.length - 2) {
    index = 0;
  }
  changeSlide();
}, 3000); // interval time in milliseconds

changeSlide();