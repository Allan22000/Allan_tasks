<?php
$servername = "08a2ba069e84";
$username = "capp1";
$password = "test";
$dbname = "capp1";

//creating connection

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
?>