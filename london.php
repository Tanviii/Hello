<?php include('includes/header.php'); ?>
<html>
<title>Europe-London</title>
<head>
<link rel="stylesheet" href="css/tours.css">
<style>


</style>
</head>

<body>
<div id="europelinks">
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="images/london1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/london2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/london3.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<!code for sidenav>
<div class="container3">
<div id="mySidenav" class="sidenav">
  <a href="#" onclick="on1()" id="accomodate">Accomodation</a>
  <a href="#" onclick="on2()" id="travel">Travel</a>
  <a href="#" onclick="on3()" id="package">Package</a>
  <a href="#" onclick="on4()" id="contact">Contact</a>
</div>


<div id="overlay1" onclick="off1()">
  <div id="text1">Heston Hyde Hotel<br><br>A 4 star accomodation<br><br>Near Heathrow Airport </div>
</div> 

<div id="overlay2" onclick="off2()">
  <div id="text2">The Travel includes<br><br>Visa,Flight,Accomodation,<br><br>Food and the Travel Guide</div>
</div> 

<div id="overlay3" onclick="off3()">
  <div id="text3">Package Price:<br><br>INR 1,20,000/- each<br><br>*conditions apply</div>
</div> 

<div id="overlay4" onclick="off4()">
  <div id="text4">Travelx<br><br>Mumbai Office:02234563634<br><br>Delhi Office:0223744453<br><br>Mail us:travelx.co@gmail.com</div>
</div> 

<div style="margin-left:80px;"></div>
</div>     

<script src="js/ani.js" type="text/javascript"></script>


<div class="container2">
<article>
  <h1>London</h1>
  <p>Whether you are visiting London for the first time or coming back for a special occasion, you’ll discover a city full of unforgettable landmarks and exciting things to do. Make the most of the top London attractions with our guide to the city’s must-sees.</p>
  <p>Our Trip Includes visit to:<br><i><b><br>Buckingham Palace<br><br>Madame Tussauds<br><br>Trafalgar Square<br><br>London Eye<br><br>The British Museum</b>
  <p>And Lots more!!!</p></i><p>So Enjoy as much as you can and discover Lavish London!!!</p>
</article>
</div>

   
   <br><br><br><br>
    </div>
    
</body>
</html>
<?php include('includes/footer.php'); ?>