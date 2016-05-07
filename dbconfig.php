<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword ='root';
$dbname = 'form';
$conn = new mysqli($dbhost,$dbuser,$dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
