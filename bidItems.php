<?php
session_start();
//echo $_SESSION['item'];
$x = $_POST['hid'];
//echo $_POST['x'];
//echo $_POST['hid'];
//echo $_POST['bid'];
$_SESSION['item'] = $_POST['bid']; 
$con=mysql_connect("localhost","root","");
if(!$con){
	die('could not connect'.mysql_error());
}
$dbselect = mysql_select_db("pratikrosa",$con);
 if(!$dbselect){
 	die('could not connect'.mysql_error());
 }
$sql = "select * from biddertable where bidItem = '$x' order by cost desc";
$res = mysql_query($sql,$con);
$num_rows = mysql_num_rows($res);
$result = mysql_query("SELECT MAX(cost) AS max_page FROM biddertable where bidItem = '$x'");
$row = mysql_fetch_assoc($result);
echo "Maximum bid till now is: ".$row["max_page"];
/*if($num_rows) {
echo "<table border = '1' cellspacing = '0'>";
echo "<tr>";
//echo "<th>"; echo 'BidderName'; echo "</th>";
//echo "<th>"; echo 'BidItem'; echo "</th>";
echo "<th>"; echo 'BidCost'; echo "</th>";
//echo "<th>"; echo 'Date'; echo "</th>";
//echo "<th>"; echo 'Time'; echo "</th>";

echo "</tr>";

while($row = mysql_fetch_array($res)) {
	echo "<tr>";
echo "<td>"; echo $row['bidderName']; echo "</td>";
//echo "<td>".$row['username']."</td>";
echo "<td>" ;echo $row['bidItem'];echo "</td>";
echo "<td>"; echo $row['cost']; echo "</td>";

echo "<td>"; echo $row['date']; echo "</td>";

echo "<td>"; echo $row['time']; echo "</td>";

      echo "</tr>";
  }
	echo "</table>";
}*/
echo "<br><br>
<form action = 'bidInsert.php' method = 'post'>
<input type = 'item' placeholder = 'Enter your bid amount' name = 'cost'>
<button>Submit</button>
</form>
";


 ?>

