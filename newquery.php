<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Member</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php include_once ("header.php"); ?>
<div class="container">

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
echo "Successfully query sent to database";
// echo $_POST["selgrp"];
// echo $_POST["selunit"];
?>

</div> 

</body>
</html>
