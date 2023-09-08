
// resize navbar on scroll
var navbar = document.querySelector(".navbar");
// when the scroll is higher than 20 viewport heiht, add the sticky class to the tag with a class navbar
window.onscroll = () =>{
    this.scrollY >20 ?navbar.classList.add("sticky"):navbar.classList.remove("sticky");
}
// Slider 
const slider = document.querySelector('.slider');
let slideIndex = 0;

function showSlide(index) {
  const slides = slider.querySelectorAll('.slide');
  if (index < 0) 
  {
    index = slides.length - 1;
  } 
  else if (index >= slides.length) 
  {
    index = 0;
  }
  slider.style.transform = `translateX(-${index * 100}%)`;
  slideIndex = index;
}

function autoSlide() {
  showSlide(slideIndex + 1);
}

setInterval(autoSlide, 5000); // Change slide every 5 seconds

// Initial slide
showSlide(slideIndex);
