<?php
session_start();
include "databaseConn.php";
$x = $_SESSION['username'];
$y = $_SESSION['item'];
$z = $_POST['cost'];
//echo $x;
//echo $y;
//echo $z;
$date = DATE('Y-m-d H:i:s');
/*$query=mysql_query("INSERT INTO biddertable(bidderName,bidItem,cost,dt)VALUES('$x','$y','$z','$date')");
	if(!$query){
		die('data not inserted'.mysql_error());
	}
	else {
		echo "Your Bid is Completed";
	}*/
	
$result = mysql_query("SELECT MAX(cost) AS max_page FROM biddertable where bidItem = '$y'");
$row = mysql_fetch_assoc($result);
//echo $row["max_page"].'*';

$query=mysql_query("INSERT INTO biddertable(bidderName,bidItem,cost,dt)VALUES('$x','$y','$z','$date')");
	if(!$query){
		die('data not inserted'.mysql_error());
	}
	else {
		if($row["max_page"] < $z) {
			$query=mysql_query("INSERT INTO biddertable(bidderName,bidItem,cost,dt)VALUES('$x','$y','$z','$date')");
		if(!$query){
			die('data not inserted'.mysql_error());
		}
		else {
			echo "<br>Your Bid is Completed";
			}
		}
		else {
			echo "<br>Bid Again with atleast 10% difference";
			
		}
	}


?>