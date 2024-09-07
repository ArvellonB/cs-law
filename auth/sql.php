<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "Jr91766jr";
$dbname = "lawmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);}
?>