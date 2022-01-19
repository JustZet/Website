let stars = document.getElementById("stars");
let moon = document.getElementById("moon");
let mntnb = document.getElementById("montain");
let text = document.getElementById("text");
let mntnf = document.getElementById("front");
window.addEventListener("scroll", function() {
  let value = window.scrollY;

  stars.style.left = value * 0.35 + 'px';
  moon.style.top = value * 0.7 + 'px';
  mntnb.style.top = value * 0.5 + 'px';
  mntnf.style.top = value * 0 + 'px';
  text.style.marginLeft = value * -1 + 'px';
})