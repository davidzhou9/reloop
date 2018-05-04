<?php

      // Connecting database
      include ("connectDb.php");

      // Here is another way of making an SQL query.
      $sqlt = "SELECT * FROM dormRooms WHERE resCollege = '$selectRes' AND roomNum = '$roomNum'";

      // Again, Send the request
      $result = mysql_query($sqlt);

      // See if we get an OK result
      if (!$result) {
          die('SQL Error Getting User Information: ' . mysql_error());
      }
      else {
		$found = number_format(mysql_num_rows($result));
		$row = mysql_fetch_array($result);
		$emailArray = array($row["emailOne"], $row["emailTwo"], $row["emailThree"], $row["emailFour"]);
      }
      mysql_close($conn);
?>
