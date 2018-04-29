   <?php

   $email = $_POST["Email"];
   $pass = $_POST["Pass"] ;

   if(!$email or !$pass){
      echo "<html>";
      echo "<title> Empty fields </title>";
      echo '<BODY BGCOLOR="white" TEXT = "black">';
      echo "Empty Field. Please try again. Redirecting you back. ";
      echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=homePage.php">';
      echo '</body>';
      echo '</html>';

   } else{
       include ("readDb.php");

       if($found == 0){

          echo "<html>";
          echo' <title> Email not found </title>';
          echo '<BODY BGCOLOR="white" TEXT = "black">';
          echo ' Email not found. Please try again. Redirecting you back. ';
          echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=homePage.php">';
          echo '</body>';
          echo ' </html>';

        } else {
              if($pass != $passdB){
                echo "<html>";
                echo ' <title> Incorrect Password </title>';
                echo '<BODY BGCOLOR="white" TEXT = "black">';
                echo "Wrong password. Please try again. Redirecting you back. ";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=homePage.php">';
                echo '</body>';
                echo ' </html>';

             } else {
              echo "<html>";
              echo " <title> " .$row[fName]. "'s profile. </title>";
              echo '<BODY BGCOLOR="white" TEXT = "black">';
              echo '<center> <IMG src ="reloop2.jpg"> <br>' ;
              echo 'Hi ' .$row[fName]. '. welcome back! Here is your user information. <br>';
              echo "<br>";

              echo "<CENTER> <TABLE BGCOLOR=white BORDER=1 CELLSPACING=2 CELLPADDING=4 WIDTH=60%>";
              echo "<TR BGCOLOR=white>";
              echo "<TH>First Name</TH> ";
              echo "<TH>Last Name</TH> ";
              echo "<TH>Email</TH>";
              echo "<TH>Password</TH>";
              echo "</TR>";

              echo "<TR>";
              echo "<TD ALIGN=CENTER> ".$row["fName"]." </TD>";
              echo "<TD ALIGN=CENTER> ".$row["lName"]." </TD>";
              echo "<TD ALIGN=CENTER> ".$row["Email"]." </TD>";
              echo "<TD ALIGN=CENTER> ".$row["Pass"]." </TD>";
              echo "</TR>";
              echo "</TABLE></CENTER>";
              echo "<br><br>";

              echo "<H3>Update User Information</H3>";
              echo "<form name='new' action='updateUser.php' method='post'>";

              echo "<td> <input type='hidden' name='Email' value=$email /> </td></tr>";

              echo "<br>Please enter all fields to update user info: <br>";
              echo "<table width = 300>";
              echo "<tr><td>First Name:</td> <td> <input type='text' name='fName' /> </td></tr>";
              echo "<tr><td>Last Name: </td> <td> <input type='text' name='lName' /> </td> </tr>";
              echo "<tr><td>Password: </td> <td> <input type='password' name='Pass' /> </td> </tr>";
              echo "</table>";


              echo "<br><input type='submit' value='Update'><br>";
              echo "</form>";
              echo "<br><br>";
              
              
              echo '<br> <a href="homePage.php"> Return to Homepage </a> <br>';

              echo '</center>';
              echo "<br>";
              echo "</body>";
              echo ' </html>';
           }
        }
   }

 ?>



