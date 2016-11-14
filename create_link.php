<?php
$servername = "localhost";
$username = "jon";
$password = "22211";
$dbname = "ada";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>