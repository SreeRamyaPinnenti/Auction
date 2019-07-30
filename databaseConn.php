<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die('could not connect'.mysql_error());
}

//echo 'connected succesfully';
//echo "<br>";
 $dbselect = mysql_select_db("pratikrosa",$con);
 if(!$dbselect){
 	die('could not connect'.mysql_error());
 }
 //echo 'WELCOME ';
 //echo 'WELCOME ';
 //echo "<br>";
?>