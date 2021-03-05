var modal = document.getElementById('myModal');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var span = document.getElementsByClassName("close")[0];

var mybutton = document.getElementById("tButton");

function myFunc(el){
    var imgSrc = el.src;
    var altText = el.alt;
    modal.style.display = "block";
    modalImg.src = imgSrc;
    captionText.innerHTML = altText;
    document.body.style.overflow = "hidden";
mybutton.style.display = "none";
}
window.onclick = function(event){
    if(event.target == modal){
        modal.style.display = "none";
        document.body.style.overflow = "";
mybutton.style.display = "block";
    }
}
span.onclick = function() { 
    modal.style.display = "none";
    document.body.style.overflow = "";
mybutton.style.display = "block";
}
