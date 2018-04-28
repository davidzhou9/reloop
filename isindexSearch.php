<?php  // Use the <?php command so the server realizes this is PHP code and not HTML
     // Set the variable $q equal to whatever follows the "?query=" in the URL
     $q = $_GET["query"];
	 include("./html/home.html");