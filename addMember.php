<html>
<head>
<title>Member Registration</title>
</head>
<body>

<?php
      //get variables
      $fname = $_POST["fName"];
      $lname = $_POST["lName"];
	  $email = $_POST["Email"];
      $pass = $_POST["Pass"];

      //get variables from readDB.php
      include ("readDb.php");

      //add users now
      if ($found == 0){

	      if ($fname && $lname && $pass && $email){
      	      	 echo "Adding User " . $fname . " " . $lname . " at ". $email;

                 include ("connectDb.php");

     		 $sql = "INSERT INTO workersDB (fName, lName, Email, Pass) VALUES ('$fname' ,'$lname', '$email', '$pass')";

      		 $result = mysql_query($sql);

                 if ($result==1){
      		       echo ' <br> <font color="#00FF00"> New User Added! </font> '; 
                       sleep(3);
                       echo '<form id="autologin" action="login.php" method="post">';
                       echo "<input type='hidden' name='Email' value=$email />";
                       echo "<input type='hidden' name='Pass' value=$pass />";
                       echo '</form>';
                       echo '<script language="javascript">';
                       echo 'document.getElementById("autologin").submit();';
                       echo '</script>';
                 } else
       			echo ' <br> <font color="#FF0000"> <b><i> Error. Please Try Again. </b></i></font>';

                 mysql_close($conn);
      	
              } else {
      		echo "<center>You didn't include all the information. Please Try Again. Redirecting you to Registration. <br>";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=./html/register.html">';
     	      }

      }  else {
          echo "<center>Email already exists. Please log-in. Redirecting you home<br>";
          echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=isindexSearch.php">';
      }

 ?>

