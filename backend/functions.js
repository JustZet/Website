function displayNavbar() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
  
function openNav() {
    document.getElementById("Sidepanel").style.width = "250px";
}
  
function closeNav() {
    document.getElementById("Sidepanel").style.width = "0";
}