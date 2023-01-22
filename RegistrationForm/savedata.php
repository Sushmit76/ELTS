<?php
$data = $_POST['data'];
$name = $data['inputName'];
$email = $data['inputEmail'];
$phone = $data['inputPhone'];
$pass = $data['inputPass'];
$bname = $data['inputBname'];
$area  = $data['inputArea'];
$city = $data['inputCity'];
$number = $data['inputNumber'];
echo $data;
$mysqli = new mysqli("localhost", "root", "1234", "storing");

$query = "INSERT INTO business (name,email,phone,password,bname,area,city,number) VALUES ('$name','$email','$phone','$pass','$bname','$area','$city','$number')";

if ($mysqli->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();
?>