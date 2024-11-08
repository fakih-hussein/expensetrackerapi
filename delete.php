<?php
include 'connection.php';


    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "user deleted successfully";
    } else {
        echo "Error" ;
    }

?>
