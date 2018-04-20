<?php

?>

<html>
<title>Sign up!</title>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<style>
.error {
	color: #FF0000;
	letter-spacing:2px;
	font-family:"Segoe UI",Arial,sans-serif;
	font-size: 15px;
	}
</style>

<script>
			ca.onclick= function validateForm() {
				
				var x=document.forms["myform"]["pwd"].value;
				var y=document.forms["myform"]["rpwd"].value;
				if(x== "" || x == null)
				{
					alert("Password cannot be blank");
					return false;
				}
				if(x.length < 6)
				{
					alert("Password should contain atleast 6 digits");
					return false;
				}
				if(y == "" || y == null)
				{
					alert("Re-Password cannot be blank");
					return false;
				}
				if(y.length < 6)
				{
					alert("Password should contain atleast 6 digits");
					return false;
				}
				if(x != y)
				{
					alert("Passwords should match");
					return false;
				}
	
			}
</script>
<body>
	
<div id="sign-up">

<div id="su">
<p>SIGN UP</p>
</div>

<br>
<form method="post" action="authenticate.php" name="myform" onsubmit="return validateForm()">
	<h3>Enter your name</h3>
	<input type="text" name="name">
	
	
	<h3>Enter your email-id</h3>
	<input type="text" name="email" >

	
	<h3>Enter your password</h3>
	<input type="password" name="pwd">

	
	<h3>Confirm your password</h3>
	<input type="password" name="rpwd">

	<br><br>
	<input type="submit" value="Sign up">
	<br><br><br>
    </form>	
</div>



<br><br>

</body>

</html>