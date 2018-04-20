<html>
<title>Travelx-Europe</title>
<head>
<style>

html{
       background-color:rgba(255, 240, 245,0.5);
	}
 
</style>
</head>
<?php include('includes/header.php');
    include('connect.php'); ?>

<body>
<div id="europe">
<h1> Exotic Europe </h1>
<?php  
                $query = "SELECT * FROM pck_table ORDER BY pid ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
<div class="card">
 <form method="post" action="authenticate.php?action=add&id=<?php echo $row["pid"]; ?>">  
  <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["pname"]; ?>" class="card">
  <div class="container">
   <center><h2><b>Package name: <?php echo $row["pname"]; ?></b></h2> 
      
      <h2>Price: <?php echo $row["pprice"]; ?></h2>
       <br> <br> 
        <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>" />  
        <input type="hidden" name="hidden_price" value="<?php echo $row["pprice"]; ?>" />
        <input type="hidden" name="img" value="<?php echo $row["image"]; ?>"/> 
        <input type="hidden" name="details" value="<?php echo $row["link"]; ?>"/>  
        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn" value="Book Now!"/></center>
      </div></a>
    </form>
</div>
<?php  
    }  
} ?>

    </div>
    
</body>
</html>
<?php include('includes/footer.php');?>