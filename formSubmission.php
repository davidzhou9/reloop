<html>
<head>
<title>Form Submission</title>
</head>
<body>

<?php
      //get variables
	  $selectRes = $_POST["resList"];
      $roomNum = $_POST["roomNum"];
      $qualityNum = $_POST["quality"];
	  
	  $message = "Hi".
	  "\nThis is Princeton University Facilities. Upon our pickup of your recycling at your room " . $selectRes . " " . $roomNum . " we have the following feedback:\n".
	  "Overall Quality: " . $qualityNum . "/5\n".
	  "Furthermore, the following non-recyclable objects were found in your recycling:\n";
	  
	  foreach($_POST["issues"] as $selected) {
		$message = $message . "- " . $selected . "\n";
	  }
	  
	  $message = $message . "Thank you for your help in making Princeton University a sustainable institution!\n\nPrinceton Facilities";
	  
	  include ("readDbDorm.php");
	  
	  echo "Sending emails. Will redirect back to form when completed.";
	  
	  foreach($emailArray as $emailSelected) {
		 if (!empty($emailSelected)) {
			mail($emailSelected, "Princeton Facilities - Feedback on Your Recycling", $message);
		 }
	  } 
	  
	  sleep(3);
      echo '<form id="returnToForm" action="form.php">';
	  echo '</form>';
      echo '<script language="javascript">';
      echo 'document.getElementById("returnToForm").submit();';
	  echo '</script>';
 ?>

