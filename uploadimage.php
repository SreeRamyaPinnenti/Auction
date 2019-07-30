<?php
$regd = 'vyshu';
include "databaseConn.php";
if(isset($_POST['submit'])){
	$file = $_FILES['file'];
	$filename = $file['name'];
	$filetempname = $file['tmp_name'];
	$filesize = $file['size'];
	$fileerror = $file['error'];
	$filetype = $file['type'];
	
	$fileext = explode('.',$filename);
	//print_r($fileext);
	$fileactualext = strtolower(end($fileext));
	$allowed = array('jpg','jpeg','png','pdf');
	if(in_array($fileactualext,$allowed )){
		if($fileerror === 0){
			if($filesize <10000000){
				$filenamenew = $regd.".".$fileactualext;
				$filedestination = 'uploads/'.$filenamenew;
				move_uploaded_file($filetempname,$filedestination);
				$sql = "update itemtable set image = '$filedestination' where owner = '$regd'";
				$result = mysql_query($sql,$con);
				echo "<div>";
				echo "<img src = 'uploads/$filenamenew'>";
				echo "</div>";

			}
		}
	}
	

}