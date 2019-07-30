<!DOCTYPE html>  
 <html>  
 <?php 
 include "databaseConn.php";
 session_start();
$user = $_SESSION['username'];
 ?>
      <head>
           <title>Pratikrosa | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">
                <br />  
                
                <br />  
                <br />  
                <table cellpadding = "10" border = "2">  
                     
<!--<button style="width:auto;float:right;">Register</button>-->
                <?php  
                $query = "SELECT * FROM itemtable where owner = '$user'";  
                $result = mysql_query($query,$con);  
                while($row = mysql_fetch_array($result))  
                {  
					
					//$_SESSION['item'] = $row['itemName'];
					$item1 = $row['itemName'];
					$closingDate = $row['closingDate'];
					$bidNum = $row['bidsNum'];
					$img = $row['image1'].'.jpg';
             
						echo '<td><font size = "5px">';
						echo 'Closing Date: '.$closingDate.'<br>'.'Item: '.$item1.'<br>';
						echo '<form action = "delete.php" method = "post"><?php $x = "abcd"?><button name = "bid" value = '.$item1.'>DELETE</button><input type = "hidden" name = "hid" value =  '.$item1.'></form>';
						echo '</td></tr></font>';
			
						
                }  
                ?>  
                </table>  
           </div>
		   <center><?php echo "<form action = 'availableItems.php'><button>GO BACK</button></form>"; ?></center>
      </body>  
 </html> 