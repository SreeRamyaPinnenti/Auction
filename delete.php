<?php
include "databaseConn.php";

$x = $_POST['bid'];
echo $x;
//$date = DATE('Y-m-d H:i:s');
$query=mysql_query("delete from itemtable where itemName = '$x'");
	if(!$query){
		die('data not inserted'.mysql_error());
	}
	else {
		echo "Details";
	}
$query1=mysql_query("delete from biddertable where bidItem = '$x'");
	if(!$query1){
		die('data not inserted'.mysql_error());
	}
	else {
		echo "Deleted";
	}
	
	echo "<form action = 'availableItems.php'><button>GO BACK</button></form>";
?>