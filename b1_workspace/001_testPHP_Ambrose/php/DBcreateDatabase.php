<?php
// Drop database
$sql = "DROP DATABASE IF EXISTS myDB_b1_14Nov";
if ($conn -> query($sql) === TRUE) {
	echo "Database dropped successfully";
} else {
	echo "Error dropping database: " . $conn -> error;
}

// Create database
$sql = "CREATE DATABASE myDB_b1_14Nov";
if ($conn -> query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn -> error;
}
?>