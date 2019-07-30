<?php
include "databaseConn.php";
echo "login Page";
$y = $_POST['psw'];
$x = $_POST['uname'];
echo $x;
echo $y;
session_start();
$_SESSION['uname'] = $x;
$_SESSION['psw'] = $y;

$query=mysql_query("INSERT INTO userlogin(username,password)VALUES('$x','$y')");
if(!$query){
	die('data not inserted'.mysql_error());
}
else {
	header("Location:availableItems.php");
}
?>
