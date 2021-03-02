var eButton = document.querySelector('.eButton');
eButton.onclick = function(e) {
  e.preventDefault(), $(this).next("ul").slideToggle(), $(this).toggleClass("expanded")
}

var rButton = document.querySelector('.rButton');
rButton.onclick = function(e) {
    e.preventDefault(),
    "yes" == $(this).data("expanded") ? ($(".izbornik").slideUp(),
        $("body").removeClass("noscroll"),
        $("nav").removeClass("active"),
        $(this).removeClass("active"), 
    mybutton.style.display = "block",
    $(this).data("expanded", "no")) : ($(".izbornik").slideDown(), 
        $("body").addClass("noscroll"), 
        $("nav").addClass("active"), 
        $(this).addClass("active"), 
    mybutton.style.display = "none",
    $(this).data("expanded", "yes"))
}

var mybutton = document.getElementById("tButton");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
$('#tButton').click(function(){
    window.scroll({top: 0, behavior: "smooth"})
});

var slideIndex = 1;
showSlides(slideIndex);
function showSlides(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" trenutna", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " trenutna";
}
function plusSlides(n){
  clearInterval(myTimer);
  if (n < 0){
    showSlides(slideIndex -= 1);
  } else {
   showSlides(slideIndex += 1); 
  }
  if (n === -1){
    myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
  } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  }
}
function currentSlide(n){
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  showSlides(slideIndex = n);
}
window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
})
