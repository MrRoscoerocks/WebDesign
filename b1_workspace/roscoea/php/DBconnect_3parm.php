<?php
$servername = "localhost";
$username = "root";
$password = "toor";

echo "<br>MySQL connection using Object Oriented Programming<br>";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}
echo "Connected successfully (3 Parm Method)";
?>