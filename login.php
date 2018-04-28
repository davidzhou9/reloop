   <?php

   $email = $_POST["Email"];
   $pass = $_POST["Pass"] ;

   if(!$email or !$pass){
      echo "<html>";
      echo "<title> Empty fields </title>";
      echo '<BODY BGCOLOR="white" TEXT = "black">';
      echo "Empty Field. Please try again. Redirecting you back. ";
      echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=isindexSearch.php">';
      echo '</body>';
      echo '</html>';

   } else{
       include ("readDb.php");

       if($found == 0){

          echo "<html>";
          echo' <title> Email not found </title>';
          echo '<BODY BGCOLOR="white" TEXT = "black">';
          echo ' Email not found. Please try again. Redirecting you back. ';
          echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=isindexSearch.php">';
          echo '</body>';
          echo ' </html>';

        } else {
              if($pass != $passdB){
                echo "<html>";
                echo ' <title> Incorrect Password </title>';
                echo '<BODY BGCOLOR="white" TEXT = "black">';
                echo "Wrong password. Please try again. Redirecting you back. ";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=isindexSearch.php">';
                echo '</body>';
                echo ' </html>';

             } else {
              echo "<html>";
              echo " <title> " .$row[fName]. "'s profile. </title>";
              echo '<BODY BGCOLOR="white" TEXT = "black">';
              echo '<center> <IMG src ="reloop2.jpg"> <br>' ;
              echo 'Hi ' .$row[fName]. '. welcome back! This page is under development <br>';
              echo "<br>";

              echo '<form id="returnHome" action="isindexSearch.php">';
              echo "<input type='submit' value='Return to Homepage'><br>";
              echo '</form>';
              
			  
			  echo '<form id="userInfo" action="userInfo.php" method="post">';
              echo "<input type='hidden' name='Email' value=$email />";
			  echo "<input type='hidden' name='Pass' value=$pass />";
              echo "<input type='submit' value='Update'><br>";
              echo '</form>';
			  
			  
              echo '</center>';
              echo "<br>";
              echo "</body>";
              echo ' </html>';
           }
        }
   }

 ?>



