// resize navbar on scroll
var navbar = document.querySelector(".navbar");
// when the scroll is higher than 20 viewport heiht, add the sticky class to the tag with a class navbar
window.onscroll = () =>{
    this.scrollY >20 ?navbar.classList.add("sticky"):navbar.classList.remove("sticky");
}
