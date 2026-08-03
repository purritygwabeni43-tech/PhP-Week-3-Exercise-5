<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "purrity_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM users
WHERE id=7";

if ($conn->query($sql) === TRUE) {

    echo "Record deleted successfully.";

} else {

    echo "Error deleting record: " . $conn->error;

}

$conn->close();

?>