<?php

include("db.php");

$id = $_GET["id"];

$result = $conn->query("SELECT * FROM users WHERE id=$id");

$row = $result->fetch_assoc();

if(isset($_POST["update"])){

$name=$_POST["name"];

$email=$_POST["email"];

$message=$_POST["message"];

$conn->query("UPDATE users
SET
name='$name',
email='$email',
message='$message'
WHERE id=$id");

header("Location:index.php");

}

?>

<html>

<body>

<h2>Edit User</h2>

<form method="POST">

Name

<input
type="text"
name="name"
value="<?php echo $row["name"]; ?>">

<br><br>

Email

<input
type="email"
name="email"
value="<?php echo $row["email"]; ?>">

<br><br>

Message

<br>

<textarea
name="message"
rows="5"
cols="40"><?php echo $row["message"]; ?></textarea>

<br><br>

<input
type="submit"
name="update"
value="Update">

</form>

</body>

</html>