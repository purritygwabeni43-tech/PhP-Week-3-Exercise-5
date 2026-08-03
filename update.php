<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "purrity_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users
SET email='newemail@yahoo.com'
WHERE id=1";

if ($conn->query($sql) === TRUE) {

    echo "Record updated successfully.";

} else {

    echo "Error updating record: " . $conn->error;

}

$conn->close();

?>