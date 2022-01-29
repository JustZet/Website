// Implementation navbar function
function displayNavbar() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
// Open and close nav function
function openNav() {
    document.getElementById("Sidepanel").style.width = "250px";
}
  
function closeNav() {
    document.getElementById("Sidepanel").style.width = "0";
}
// Background paralax function
let roks3 = document.getElementById("roks-3");
let stars = document.getElementById("stars");
let moon = document.getElementById("moon");
let text = document.getElementById("text");
let roks2 = document.getElementById("roks-2");
let roks1 = document.getElementById("roks-1");
let ozn = document.getElementById("ozn");
window.addEventListener("scroll", function() {
  let value = window.scrollY;

  roks3.style.top = value * 0.5 + 'px';
  stars.style.left = value * 0.2 + 'px';
  moon.style.top = value * 0.7 + 'px';
  text.style.marginLeft = value * -1 + 'px';
  roks2.style.left = value * 0.1 + 'px';
  roks1.style.top = value * 0.5 + 'px';
  ozn.style.top = value * -0.4 + 'px';
  ozn.style.left = value * 0.4 + 'px';
})