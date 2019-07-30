<?php
session_start();
include "databaseConn.php";
$x= $_POST['uname'];
$y = $_POST['psw'];
$_SESSION['username'] = $x;
$sql2= "SELECT * FROM userlogin where username='$x' && password='$y'";
$result=mysql_query($sql2,$con) or die('could not connect');
$num_rows= mysql_num_rows($result);
echo "$num_rows Rows"."<br>";
if($num_rows >0){
	header("Location:availableItems.php");
}
else {
	header("Location:homepage.html");
	//window.location.href("C:\xampp\htdocs\login.php");
	//echo "<script type=\"text/javascript\">window.alert('login as admin'); </script>";
}
?>

