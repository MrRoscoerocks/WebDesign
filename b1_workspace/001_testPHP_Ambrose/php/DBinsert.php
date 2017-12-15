<?php
// Insert Multiple
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jane', 'Moskey', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "<br>New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>