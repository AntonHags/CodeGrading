<?php
#db.php -- is the php code to connect to the MySQL database. 
#It should be called many times whenever it is needed, therefore it is defined in a separate file 
#and the other files can just call it by  (include 'db.php';).


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "codegrading";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname); 

if (mysqli_connect_error()) { 
    die("Connection failed: " . mysqli_connect_error());  
}
?>