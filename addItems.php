<?php
session_start();
$userNm = $_SESSION['username'];

echo $userNm;
?>


<html>
   <head>
      <link rel = "stylesheet" type = "text/css" href= "plogin.css">
      <script>
          </script>
   </head>
   <body class = "bg">
      <div class = "div1">
         <form name = "regform" method= "post" action ="itemsAdded.php" enctype="multipart/formdata">
            <table class = "t1" cellspacing = "20">
				<tr>
                  <td><strong>Item Name</strong></td>
               </tr>
               <tr>
                  <td><input type = "text" maxlength="20" name = "item"  ></input></td>
               </tr>
               <tr>
                  <td><strong>Closing date</strong></td>
               </tr>
               <tr>
                  <td><input type = "date" maxlength="20" name = "cd"  ></input></td>
               </tr>
               <tr>
                  <td><strong>description</strong></td>
               </tr>
               <tr>
                  <td><input type = "text" name = "desc" maxlength="20" ></input></td>
               </tr>
			   <tr>
                  <td><strong>Cost:</strong></td>
               </tr>
               <tr>
                  <td><input type = "text" name = "cost" maxlength="20" ></input></td>
               </tr>
               <tr>
                  <td><strong>image</strong></td>
               </tr>
               <tr>
                  <td><input type = "file" name = "file" id = "file" ></input></td>
               </tr>
                  </table>
            <p> <input type="submit" value="ADD" name = "submit" maxlength="10" size="20" class = "button" ></p>
         </form>
      </div>
   </body>
</html>