 <?php

 $hostName = "localhost";
 $dbUser =  "root"; 
 $dbPassword = "";
 $dbName = "pokloy";
 $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
 if (!$conn) {
    die("wazzup wowowin!!;");
 }
echo"wazzup negga!";

 ?>