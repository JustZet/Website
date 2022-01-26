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