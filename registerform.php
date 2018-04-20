

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/> <!-- metaname viewport-->
<link href="css/signup.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Sign up</title>
<style>
    body{background-image: url("images/12.jpg");}
</style>
<script type="text/javascript" src="js/reg.js"></script><!-- validate form -->
</head>
<body>
<div class="container">
<img src="images/person.png">
<h1>Register Here!</h1>
  <form method="post" action="#" onsubmit="return validateForm()" name="myForm">
    <div class="form-input">
      <input type="text" name="uname"
	  placeholder="Enter username">
    </div>
	<div class="form-input">
      <input type="email" name="email"
	  placeholder="Enter email">
    </div>
	
    <div class="form-input">
      <input type="password" name="pwd"
	  placeholder="Enter password">
    </div>

	<input type="reset" name="reset"
	value="Cancel" class="btn">
	<input type="submit" name="submit"
	value="Register" class="btn"><br>
	<p>Already registered? <a href="login.php" style='text-decoration:none' >Login</a></p>
	

</form>
	
<?php
include('connect.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       
  
   $Name = $_POST{'uname'};
   $Email= $_POST{'email'};
   $Password= $_POST{'pwd'};
   
   $sql= "Insert into users (name,email,password) VALUES ('$Name' ,'$Email' ,'$Password')";
   
   if(!mysqli_query($connect,$sql)) //if insert not done 
   {
       echo "<script type='text/javascript'>alert('Registration unsuccessful or Email already registered')</script>";
       echo "<a href='index.php' style='text-decoration:none'>Try to register again</a>";
   }
   else //if insert done
   {
       echo "<script type='text/javascript'>alert('You are a registered user now')</script>";   
       echo "<br><a href='index.php' style='text-decoration:none'>Proceed with login</a>";
   }
    }
    
?>   
</div><!-- container -->
</body>
</html>