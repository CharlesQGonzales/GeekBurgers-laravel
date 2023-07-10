// slider

const sliderText = document.querySelector(".slider-text");
const spans = sliderText.querySelectorAll("span");
const totalWidth = sliderText.offsetWidth;
let spanWidth = 0;

spans.forEach((span) => {
  spanWidth += span.offsetWidth;
});

sliderText.innerHTML += sliderText.innerHTML;


const duration = (totalWidth + spanWidth) / 100; 
sliderText.style.animationDuration = duration + "s";


