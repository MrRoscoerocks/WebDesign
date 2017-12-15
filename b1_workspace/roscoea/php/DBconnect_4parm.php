<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "myDB_b1_14Nov";
//$fname = $_GET["firstname"];
//$lname = $_GET["lastname"];
//$email = $_GET["email"];

/******** Ops ******
 * 
 * $hostname = "DBv1root.db.9259277.79e.hostedresource.net";
 * $username = "DBb1root";
 * $password = "DBb1@toor"
 * $dbname = "DBb1root";
 *  
 */

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}
?>