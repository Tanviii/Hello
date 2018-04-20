<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="css/signup.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><title>Login trial</title>
<style> body{background-image: url("images/12.jpg");}</style>
<script language="javascript">
function validateForm()
{
/* Validating blank fields */
var x=document.forms["myForm"]["uname"].value;
if (x==null || x=="")
{
alert("First name must be filled out");
return false;
}
/* Validating blank fields End */
    var password1 = document.forms["myForm"]["pwd"].value;

if(password1 == "" || password1 == null)
{
alert("Password cannot be blank");
return false;
}
    
}
    
</script>
</head>
<body>
<div class="container">
<img src="images/person.png">
<h1>Login Here!</h1>
  <form method="post" action="#" onsubmit="return validateForm()" name="myForm">
    <div class="form-input">
      <input type="text" name="uname" placeholder="Enter username">
    </div>
    <div class="form-login-pass">
      <input type="password" name="pwd"
	  placeholder="Enter password">
    </div>
	<input type="submit" name="submit"
	value="LOGIN" class="btn"><br><br>
	<br>
	<p>New user? <a href="http://localhost:8012/registerform.php">Sign Up</a></p>
   </form> 
   
 <?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('travelx') or die(mysql_error());
 $name=$_POST['uname'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from users where name='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)// if user properly entered 
   {  
    $_SESSION["logged"] = true;   
    $_SESSION['name']=$name;
    header('location:index.php');
   }
   else //if user wrongly entered
   {
    $_SESSION["logged"] = false;
    echo'Your entered username or password is incorrect';
   }
 }
 else // if he did not enter anything
 {
  echo'Enter both username and password';
 }
}
?>                    
                     
</div>
</body>
</html>