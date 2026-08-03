<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "purrity_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, email)
VALUES ('Anathi', 'anathi@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>