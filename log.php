<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 include('connect.php');
 $name=$_POST['uname'];
 $pwd=$_POST['pwd'];
if(isset($_POST['submit']))
{
	$username=test_input($_POST['uname']);
	$password=test_input($_POST['pwd']);
	$query="SELECT * FROM users where name='$username' and password='$password'";
	$result=$db->query($query);
	$num=$result->num_rows;
	
	if($num>0)
	{
	echo "<script type='text/javascript'>alert('login successful')</script>";
	$_SESSION["logged"] = true;  
	$_SESSION['uname']=$username;
	header('Location:index.php');
	}
	else
	{
	$_SESSION["logged"] = false;
	echo "<script type='text/javascript'>alert('register urself to login')</script>";
	echo "ERROR".$conn->error;
	
	}


}
?>  