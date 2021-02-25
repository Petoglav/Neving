
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
    $(this).data("expanded", "no")) : ($(".izbornik").slideDown(), 
        $("body").addClass("noscroll"), 
        $("nav").addClass("active"), 
        $(this).addClass("active"), 
    $(this).data("expanded", "yes"))
}
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
$('#myBtn').click(function(){
    window.scroll({top: 0, behavior: "smooth"})
});

var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" trenutna", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " trenutna";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

var stop = $(".zabrojilo").offset().top;
$(window).scroll(function() {
    if ($(window).scrollTop() > stop ) {
        $(window).off("scroll");
        $('.broj').each(function () {
            var $this = $(this);
            jQuery({ Counter:+ $this.attr("data-decimal") }).animate({ Counter: $this.attr("data-number") }, {
                duration: 4000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
});
