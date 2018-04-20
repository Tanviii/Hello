<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<style>

body {font-family: Verdana,sans-serif;margin:0;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
 margin-left: -190px;
 margin-right: -190px;
 margin-top:-28px;
 margin-bottom:20px;
 height: 90%;
 overflow:hidden;
display: inline-block;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 32px;
  padding: 8px 12px;
  position: absolute;
  bottom: 200px;
  width: 100%;
  text-align: center;
}




/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/banner1.jpg" style="width:100%">
  <div class="text" style="color:black;"></div>
</div>

<div class="mySlides fade">
  
  <img src="images/banner2.jpg" style="width:100%">
  <div class="text">Traveling leaves you speechless, then turns you into a story teller.</div>
</div>

<div class="mySlides fade">
  
  <img src="images/banner3.jpg" style="width:100%">
  <div class="text" style="color:black;">Travel not to escape life, but for life not to escape you.</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
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
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
