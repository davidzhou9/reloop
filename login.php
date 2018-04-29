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
			  
			  include("./html/login.html");

           }
        }
   }

 ?>



