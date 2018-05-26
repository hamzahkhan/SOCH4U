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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://soch4u.com/index.html">SOCH4U Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="addmember.html">Add new member</a></li>
      <li><a href="newquery.html">New query</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

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

 $query = "INSERT INTO `SOCH4U`.`input_details` (`name`, `age`, `gender`, `phone`, `blood_group`, `city`) VALUES ('Hamzah Khan', '21', 'M', '8392881444', 'B+', 'Aligarh') ";
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
<!-- <?php

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
if ($conn->query($query) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
 -->
