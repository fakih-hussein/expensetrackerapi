<?php
include 'connection.php';


    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET username='$name'";
    if ($conn->query($sql) === TRUE) {
        echo "user updated successfully";
    } else {
        echo "Error";
    }

?>
