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
$dbname = "SOCH4U";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$phone=$_POST["phone"];
$group = $_POST["group"];
$city = $_POST["city"];

 $query = "INSERT INTO `SOCH4U`.`input_details` (`name`, `age`, `gender`, `phone`, `blood_group`, `city`) VALUES 
 ('$name', '$age', '$gender', '$phone', '$group', '$city') ";
if ($conn->query($query) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
</div> 

</body>
</html>
