<?php
	include "databaseConn.php";
	session_start();
		/*$file = $_POST['file'];
		echo $file;
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
				$sql = "update itemtable set image = '$filedestination' where owner = '$user'";
				$result = mysql_query($sql,$con);
				echo "<div>";
				echo "<img src = 'uploads/$filenamenew'>";
				echo "</div>";
			}
		}
	}
	

}*/
	$user = $_SESSION['username'];
	$item = $_POST['item'];
	$cd = $_POST['cd'];
	$desc = $_POST['desc'];
	
	$cost = $_POST['cost'];
	
	$query=mysql_query("INSERT INTO itemtable(itemName,owner,closingDate,bidsNum,minCost,image1)VALUES('$item','$user','$cd','0','$cost','uploads/vyshu.jpg')");
	if(!$query){
		die('data not inserted'.mysql_error());
	}
	else {
		echo "inserted";
	}
	
	
	
	



?>

