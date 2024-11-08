<?php
include 'connection.php';

    $name = $_POST['username'];

    $sql = "INSERT INTO users (name, email) VALUES ('$username')";
    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error" ;
    }

?>
