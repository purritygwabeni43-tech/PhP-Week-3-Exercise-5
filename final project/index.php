<?php
include("db.php");

// Save new record
if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO users(name,email,message)
            VALUES('$name','$email','$message')";

    $conn->query($sql);
}
?>

<!DOCTYPE html>

<html>

<head>

<title>Final Project</title>

<style>

table{
border-collapse:collapse;
width:100%;
}

table,th,td{
border:1px solid black;
padding:10px;
}

</style>

</head>

<body>

<h2>User Form</h2>

<form method="POST">

Name:
<input type="text" name="name" required>

<br><br>

Email:
<input type="email" name="email" required>

<br><br>

Message:
<br>

<textarea name="message" rows="5" cols="40"></textarea>

<br><br>

<input type="submit" name="submit" value="Save">

</form>

<hr>

<h2>All Users</h2>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Action</th>

</tr>

<?php

$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row["id"]."</td>";

echo "<td>".$row["name"]."</td>";

echo "<td>".$row["email"]."</td>";

echo "<td>".$row["message"]."</td>";

echo "<td>

<a href='edit.php?id=".$row["id"]."'>Edit</a>

|

<a href='remove.php?id=".$row["id"]."'>Delete</a>

</td>";

echo "</tr>";

}

?>

</table>

</body>

</html>