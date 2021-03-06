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
    myTimer = setInterval(function(){plusSlides(n + 2)}, 3000);
  } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 3000);
  }
}
function currentSlide(n){
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(n + 1)}, 3000);
  showSlides(slideIndex = n);
}
window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 3000);
})

$('.button').on("mouseover",function(){
   clearInterval(myTimer);
});
$('.button').on("mouseout",function(){
   clearInterval(myTimer);
   myTimer = setInterval(function(){plusSlides(slideIndex)}, 3000);
});
