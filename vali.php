<?php
include('includes/header.php');
include('connect.php');
date_default_timezone_set('Indian/Chagos');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_SESSION['name'])) {
   $tdate=$_POST{'tdate'};
   $pid=$_POST{'pid'};
   $city = $_POST{'city'};
   $date= $_POST{'ddate'};
   $pname=$_POST{'pname'};
   $nom=$_POST{'nom'};
   $total=$_POST{'pck_price'} * $nom; 
   $contact= $_POST{'mobile'};
   
   if (isset($_SESSION['name']))
   {   
        $sql= "Insert into bookings (bdate,pid,pname,departurecity,ddate,nom,total_price,contact) VALUES ('$tdate','$pid','$pname','$city','$date','$nom','$total','$contact')";
            if(!mysqli_query($connect,$sql))
                {
                    echo '<script>alert("booking unsuccessful")</script>';
					echo "<h2>Please try again!</h2>";
                }
            else
                {
                    echo '<script>alert("booking successful")</script>';
					?>
					<html>
<head>
<link rel="stylesheet" href="css/vali_css.css">
<style>

	.bh1{font-family: French Script MT;font-size: 40px ;margin-top:auto;position:relative;top:30;left:50;} 
</style>
</head>
<body>
    <center><h2 class="bh1"><?php
                if (isset($_SESSION['name'])) {
                    echo "  Happy Journey ".$_SESSION["name"]."<br><br>
							You have selected ".$pname." package.
							Total amount to be paid: ".$total."<br>";
                    } ?></h2>
					<div id="viewport" style="width: 640px; height: 480px;">
      <canvas id="sky" width="640" height="450" ></canvas>
      <!-- Based on public domain image
           https://pixabay.com/en/aeroplane-aircraft-airplane-flight-161999/ -->
      <div class="marquee">
        <img src="images/aircraft.png" width="100" height="100">
        
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/celebrate.js"></script>
    <script type="text/javascript">
        $(function() {
            fillBanner('#banner');
            var anim = animate('#sky');
            setTimeout(function() { anim.stop(); }, 60000);
        });
    </script></center>
	</body>
					<?php
                }
    } 
   }  
  }
  else {
    echo "<script>alert('You are not an authorised use!')</script>";
    echo "<center><h1><b>Login for Booking!</b></h1></center>";
    }

?>

	<?php include('includes/footer.php'); ?>
