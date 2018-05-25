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

 $query = "INSERT INTO `SOCH4U`.`input_details` (`name`, `age`, `gender`, `phone`, `blood_group`, `city`) VALUES ('Hamzah Khan', '21', 'M', '8392881444', 'B+', 'Aligarh') ";
	echo $query;
if ($conn->query($query) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>

