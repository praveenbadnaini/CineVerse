<?php
$servername = "localhost:3306"; //Database server
$uername = "root"; //Database username
$password = "@AmmuPraveen1234"; //Database password
$dbname = "db_connect.php"; // Name of the Database 

//Create connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>