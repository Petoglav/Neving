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
