// Nav Toggle
var toggleButton = document.querySelector("#logo>button")
var theElement = document.querySelector("#nav-wrapper")
toggleButton.addEventListener("click",function(){
theElement.classList.toggle("show")
})


// Set Featured Class For gp-post
var a = document.querySelectorAll(".gp-post")
a[0].setAttribute("class","featured");
a[9].setAttribute("class","featured");
a[16].setAttribute("class","featured");
a[23].setAttribute("class","featured");

// Changing Featured text
var b = document.querySelectorAll(".featured .meta small.cat")
b[0].textContent = "Inspiration";
b[1].textContent = "Feature of the week";