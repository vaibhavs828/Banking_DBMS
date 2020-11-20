const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
const plant = document.querySelector(".plant");
const headline = document.querySelector(".headline");
const signup = document.querySelector(".signup");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});
const tl = new TimelineMax();
t1l.fromTo(links, 1, {opacity:-1, x: 30}, {opacity:1, x: 0});

