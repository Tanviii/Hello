<?php 

include('includes/header.php'); 
if(isset($_POST['book'])){
    header('location:authenticate.php');
}
else{
    

}

?>

<html>
<title>India-Agra</title>
<head>
<link rel="stylesheet" href="css/tours.css">


</head>

<body>
<div id="indialinks">
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="images/agra1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/agra2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="images/agra3.jpg" style="width:100%">
  </div>

</div>
<br>




<!code for sidenav>
<div class="container3">
<div id="mySidenav">
  <a href="#" onclick="on1()" id="accomodate">Accomodation</a>
  <a href="#" onclick="on2()" id="travel">Travel</a>
  <a href="#" onclick="on3()" id="package">Package</a>
  <a href="#" onclick="on4()" id="contact">Contact</a>
</div>


<div id="overlay1" onclick="off1()">
  <div id="text1">Agra Regal Vista<br><br>A Sterling Holidays Resort</div>
</div> 

<div id="overlay2" onclick="off2()">
  <div id="text2">The Travel includes<br><br>Flight,Accomodation,<br><br>Food and the Travel Guide</div>
</div> 

<div id="overlay3" onclick="off3()">
  <div id="text3">3Days/4Nights<br><br>Package Price:INR 20,000/- each<br><br>*conditions apply</div>
</div> 

<div id="overlay4" onclick="off4()">
  <div id="text4">Travelx<br><br>Mumbai Office:02234563634<br><br>Delhi Office:0223744453<br><br>Mail us:travelx.co@gmail.com</div>
</div> 

<div style="margin-left:80px;"></div>
</div>     

<script src="js/ani.js" type="text/javascript"></script>


<div class="container2">
<article>
  <h1>Agra</h1>
  <br>
  <p>Agra - Located 220 kms from Delhi, Agra is a must visit city on any Tour of India. Home of the World famous Taj Mahal, Agra provides avid glimpses of Mughal architecture. To be in Agra is like taking a walk through India's Mughal period history.</p>
  <p>Our Trip Includes visit to:<br><i><b><br>The Taj Mahal<br><br>Panch Mahal<br><br>Anguri Bagh<br><br>Agra Fort<br><br>Fatehpur Sikri</b>
  <p>And Lots more!!!</p></i><p>Shop,Spend and taste the most delicious of world famous kebabs in the Trip to Agra !!!</p>
</article>
</div>

   <br><br><br><br>

    </div>
</body>
</html>
<?php include('includes/footer.php'); ?>