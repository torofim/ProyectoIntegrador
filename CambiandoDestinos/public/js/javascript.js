$('.carousel').carousel({
  interval: 2500
})
function myFunction() {
    var x = document.getElementById("nave");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
