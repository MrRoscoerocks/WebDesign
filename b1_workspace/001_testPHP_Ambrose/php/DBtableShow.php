<?php
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	// display records in a table
	echo "<table border='1' cellpadding='10'>";

	// set table headers
	echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registration_Date</th><th></th><th></th></tr>";

	while ($row = $result -> fetch_object()) {
		// set up a row for each record
		echo "<tr>";
		echo "<td>" . $row -> id . "</td>";
		echo "<td>" . $row -> firstname . "</td>";
		echo "<td>" . $row -> lastname . "</td>";
		echo "<td>" . $row -> email . "</td>";
		echo "<td>" . $row -> reg_date . "</td>";
		echo "<td><a href='records.php?id=" . $row -> id . "'>Edit</a></td>";
		echo "<td><a href='php/delete.php?id=" . $row -> id . "'>Delete</a></td>";
		echo "</tr>";
	}

	echo "</table>";
}
?>

<!--
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
-->
