<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "expensetrackerdb"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed");
}
?>
