<?php
include 'connection.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - UserName: " . $row["username"];
    }
} else {
    echo "no record found";
}
?>
