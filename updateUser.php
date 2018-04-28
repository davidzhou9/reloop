<html>
<head>
<title>Member Registration</title>
</head>
<body>

<?php
      //get variables
      $fName = $_POST["fName"];
      $lName = $_POST["lName"];
      $Pass = $_POST["Pass"];
	  $Email = $_POST["Email"];

      include ("readDb.php");

      //update information now
      echo "Updating user information now... ";

      include ("connectDb.php");
	  
      $sql = "UPDATE workersDB SET fName='$fName', lName='$lName', Pass='$Pass' WHERE Email = '$Email' ";

      $result = mysql_query($sql);

      if ($result==1){
      	    echo ' <br> <font color="#00FF00"> User updated!</font> ';
            sleep(3);
            echo '<form id="autologin" action="login.php" method="post">';
            echo "<input type='hidden' name='Email' value=$Email />";
            echo "<input type='hidden' name='Pass' value=$Pass />";
            echo '</form>';
            echo '<script language="javascript">';
            echo 'document.getElementById("autologin").submit();';
            echo '</script>';
      } else
       	    echo ' <br> <font color="#FF0000"> <b><i> Error. Please Try Again. </b></i></font>';      	

      mysql_close($conn);

 ?>

