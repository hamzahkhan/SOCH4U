

<?php
$servername = "35.185.133.86";
$username = "aamir";
$password = "mypass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo $_POST["selgrp"];
echo $_POST["selunit"];
?>