<?php
$localhost = "localhost";
$username = "root";
$password = "1234";
$dbname = "sushmit";

// Create connection
$conn = new mysqli($localhost, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO business (Name, E-mail, Phone, Password)
VALUES ('$inputName', '$inputemail', '$inputphone' '$inputpass');

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
