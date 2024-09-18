<?php
session_start();

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'event');

$user=$_POST['uname'];
$pword=$_POST['pass'];

$s="select * from admin where username='$user' && password='$pword' ";

$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if ($num==1) {
	
	$_SESSION['username']=$user;
	header('location:shift12.html');
}
else{
	header('location:admin.html');
}

?>