<?php
include 'php/DBconnect_4parm.php';
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>";
	// output data of each row
	while ($row = $result -> fetch_assoc()) {
		echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["reg_date"] . "</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}
include 'DBclose.php';
?>