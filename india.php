<?php include('includes/header.php');
include ('connect.php');

?>

<html>
<title>Travelx-India</title>
<head>
<link rel="stylesheet" type="text/css" href="css/globalheaderstyle.css">
</head>


<body>
<div id="india">
<h1><center> Magical India </center></h1>
<br><br>
 <?php  
                $query = "SELECT * FROM pck_india ORDER BY iid ASC";  // we r selecting each pck from db to display on india page
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
            <div class="card"><!-- after selecting pck inside card.. -->
             <form method="post" action="authenticate.php?action=add&id=<?php echo $row["iid"]; ?>">  <!-- there is a form there is image ,price,--><!--this will be echo in url -->
              <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["pname"]; ?>" class="card">
              <div class="container"><!-- this container  tells d name n price of pck  & takes hidden values to next page-->
               
			   <h2><b><center>Package: <?php echo $row["pname"]; ?></center></b></h2> 
                  
                  <center><h2>Price : <?php echo $row["pprice"]; ?></h2></center>
                   <br>  
                    <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>" />  
                    <input type="hidden" name="hidden_price" value="<?php echo $row["pprice"]; ?>" />
                    <input type="hidden" name="img" value="<?php echo $row["image"]; ?>"/> 
                    <input type="hidden" name="details" value="<?php echo $row["link"]; ?>"/> 
                    <center><input type="submit" name="add_to_cart" class="btn" value="Book Now!"/></center>
                  </div></a><!--container -->
                </form>
            </div> <!-- card -->
            <?php  
                }  
            } ?><!--ths complets d process of choosing a pck -->

</div>
</body>
</html>
<?php include('includes/footer.php');?>