function next() {
  const widthSlider = document.querySelector(".slider").offsetWidth;
  document.querySelector(".slider__content").scrollLeft += widthSlider;
}

function previous() {
  const widthSlider = document.querySelector(".slider").offsetWidth;
  document.querySelector(".slider__content").scrollLeft -= widthSlider;
}
