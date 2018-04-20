
<?php   
 include('includes/header.php');
 include('connect.php');
date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-o'); 
	$today     = date('o-m-d');
    $time =date('h:i:s A');
if(isset($_POST["add_to_cart"]))  
 {  

           $item_array = array(  
                'item_id'              =>     $_GET["id"],  
                'item_name'            =>     $_POST["hidden_name"],  
                'item_price'           =>     $_POST["hidden_price"], 
                'image'                =>     $_POST["img"],
                'details'              =>     $_POST["details"]
           );  
           $_SESSION["shopping_cart"][0] = $item_array;
                
 }   
 ?>
 <html>
 <head>
 <style>
     .card{box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width :350px;height:500px;border-radius:3%;
	 background-color: rgba(21, 91, 216,0.5);padding-top:  10px ; padding-left: 10px; padding-right: 10px;p
	 adding-bottom: 10px;position: relative;left: 880px;top:-460px;}
     .card img {height: 50%;width: 90%; margin: auto; position: relative; left: 0;top: 0;}
     h1, .container h2, .container h3 {text-align: center;color: #350202;}
     h4 {color: #350202;}
     form {height: 600px;
	 position:relative;
	 bottom:0;
        width: auto;
        background-color: #f5f1ea;
        padding-bottom: 120px;
        padding-top: 10px;
        margin: 20px;
         border-radius: 20px;}
	.bh1{font-family: French Script MT;font-size: 70px; margin-top:auto;position:relative;top:30;} 
		 
     table {margin-left: 50;}
     .btn {    width: 150;
            border-radius: 5px;
            height: 35px;
            background-color: springgreen;
            color: navy;
            font-size: 15px;}
     input, select {
  width : 150px;
  margin: 0;
        
         height: 30px;

  -webkit-box-sizing: border-box; /* For legacy WebKit based browsers */
     -moz-box-sizing: border-box; /* For legacy (Firefox <29) Gecko based browsers */
          box-sizing: border-box;
}
     td,th{ margin: 2px;}
 </style>
    <script type="text/javascript">
     function validateForm(){
         /*mobile no. validation*/
         var mobile = document.forms["myForm"]["mobile"].value;

            if(mobile == "" || mobile == null)
            {
                alert("Password cannot be blank");
                return false;
            }
            if(mobile.length < 10 || mobile.length > 10)
            {
             alert("Mobile number should contain 10 digits");
             return false;
            }
        var ddate = document.forms["myForm"]["ddate"].value;
         var today = new Date();
         if(ddate<today){
             alert("Enter a valid date");
             return false;
         }
            }  
     
     </script>
     </head>
 <body>
     
                
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                            
                                  $pid = $values["item_id"];
                                  $pname = $values["item_name"];
                                  $pprice = $values["item_price"];
                                  $pdetails = $values["details"]; 
                                  $image = $values["image"];
                                
                               }  
                        
                          }  
                          ?>                        
<form name="myForm" action="vali.php" onsubmit="return validateForm()" method="post">
<table cellpadding="15px" cellspacing="0px">
 <h1 class="bh1">Booking Details</h1> 
<tr><td><h4>Today's date</h4></td><td><input type="hidden" name="tdate" value="<?php echo $today?>"><?php echo $date?></td></tr>
<tr><td><h4>Time</h4></td><td><?php echo $time?></td></tr>
<tr><td><h4>Departure details</h4></td><td>
		<select name="city" required>
		<option value="" disabled selected>Select City</option>
			<option value="Mumbai">Mumbai</option>
			<option value="Delhi">Delhi</option>
			<option value="Jaipur">Jaipur</option>
			<option value="Banglore">Banglore</option>
			<option value="Chennai">Chennai</option>
			<option value="Hydrabad">Hydrabad</option>
		</select>
</td></tr>

 <tr><td><h4>Select Date: </h4></td><td><input type="date" name="ddate" min="<?php echo $today;?>" required></td></tr>
<tr><td><h4>No. of members: </h4></td><td><input type="number" name="nom" min="1" required></td></tr>
<tr><td><h4>Mobile No: </h4></td><td><input type="text" name="mobile" required></td></tr>
<input type="hidden" name="pname" value="<?php echo $pname; ?>">     
<input type="hidden" name="pid" value="<?php echo $pid; ?>">
<input type="hidden" name="pck_price" value="<?php echo $pprice; ?>">
<tr><td colspan="2" align="center"><input type="submit" class="btn" value="Confirm Booking"></td>
</tr>
</table>


 <div class="card">
     <center>
       <img src="<?php echo $image; ?>" alt="<?php echo $pname; ?>" class="card">
          <div class="container">
             <h2><b>Your Package</b></h2> 
             <h3>Package name : <?php echo $pname; ?></h3>
             <h2><a href="<?php echo $pdetails; ?>">View Details</a></h2>
             <h3>Price:<?php echo $pprice; ?></h3>     
            <input type="submit" class="btn" value="Confirm booking!">
            
         </div>
         </center>
       </div>

</form>
</body>
                                         

                                             
<?php include('includes/footer.php'); ?>