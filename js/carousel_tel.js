const slider = document.querySelector("#slider");
const sliderContainer = slider.querySelector(".slider-container");
const images = sliderContainer.querySelectorAll("img");


// var x = window.matchMedia("(max-width: 740px)")
// var y = window.matchMedia("(max-width: 600px)")

let index = 0;

function changeSlide() {
  
    sliderContainer.style.left = `-${index * 100}%`;
  

  
}

setInterval(() => {
  index++;
  if (index === images.length - 0) {
    index = 0;
  }
  changeSlide();
}, 3000); // interval time in milliseconds

changeSlide();