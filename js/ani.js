var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}

function on1() {
    document.getElementById("overlay1").style.display = "block";
}

function off1() {
    document.getElementById("overlay1").style.display = "none";
}

function on2() {
    document.getElementById("overlay2").style.display = "block";
}

function off2() {
    document.getElementById("overlay2").style.display = "none";
}

function on3() {
    document.getElementById("overlay3").style.display = "block";
}

function off3() {
    document.getElementById("overlay3").style.display = "none";
}

function on4() {
    document.getElementById("overlay4").style.display = "block";
}

function off4() {
    document.getElementById("overlay4").style.display = "none";
}
