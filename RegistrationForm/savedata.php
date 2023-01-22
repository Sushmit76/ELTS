<?php
//assigning value of users data from form
$Name = $_POST['Name'];
$Email = $_POST['E-mail'];
$Phone = $_POST['Phone'];
$Password = $_POST['Password'];
$business = $_POST['business'];
$area = $_POST['area'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
//creating connection

$databaseHost = 'localhost';
$databaseName = 'test'; /// here enter your db name
$databaseUsername = 'root'; // username 
$databasePassword = 'root'; // ddb user password

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);


//incase connection failed show message and exit from php script
if ($conn->connect_error) {
    die("Connection failed: ");
    echo $conn->error;
}


//2nd step run sql query
//inserting data from table to database 
$sql = "INSERT INTO students (Name,Email,Phone,Password,business,area,city,pincode) VALUES ('{$Name}','{$Email}', '{$Phone}','{$Password}','{$business}','{$area}','{$city}','{$pincode}'); ";
$result = $conn->query($sql);

//after saving user data to database redirecting user to add page


//3rd step closing connection
$conn->close();


?>
<?php
echo " php admin file in the savedata.php"
?>