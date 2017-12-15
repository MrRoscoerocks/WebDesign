<?php
include 'DBconnect_4parm.php';

echo "<br><hr><br>";
$fname = $_POST["firstname"];
echo "First name: " . "$fname" . "<br>";

$lname = $_POST["lastname"];
echo "Last name: " . "$lname" . "<br>";

$email = $_POST["email"];
echo "email: " . "$email" . "<br>";

echo "<br><hr><br>";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$fname', '$lname', '$email')";

if ($conn -> query($sql) === TRUE) {
	echo"<br>New single record created successfuly</br>";
} else {
	echo "<br>Error: " . $sql . "<br>" . $conn -> error . "<br>";
}

echo "<br> Closing DB connection<br>";

header("Location: ../index.php");

include 'DBclose.php';
?>
