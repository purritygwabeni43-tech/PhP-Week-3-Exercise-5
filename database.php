<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "purrity_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully.<br>";

// SQL statement to create the users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

// Execute the CREATE TABLE statement
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// SQL statement to insert a sample record
$sql = "INSERT INTO users (name, email)
VALUES ('Purrity', 'purritygwabeni@gmail.com')";

$sql = "ALTER TABLE users
  ADD message TEXT";
// Execute the INSERT statement
if ($conn->query($sql) === TRUE) {
    echo "Sample record inserted successfully.<br>";
} else {
    echo "Error inserting record: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();

?>