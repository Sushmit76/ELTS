<?php
$data = $_POST['data'];
$name=$data['inputName'];
$email = $data['inputEmail'];
$phone = $data['inputPhone'];
$pass = $data['inputPass'];
$bname = $data['inputBname'];
$area  = $data['inputArea'];
$city = $data['inputCity'];
$number = $data['inputNumber'];
echo $data;
// $mysqli = new mysqli("hostname", "username", "password", "database");

// $query = "INSERT INTO table (data) VALUES ('$data')";

// if ($mysqli->query($query) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $query . "<br>" . $mysqli->error;
// }

// $mysqli->close();
?>
