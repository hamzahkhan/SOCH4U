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
  <h2>Add new member</h2>
  <p>Here you can add new donor member of Soch Blood Bank with appropriate details</p>
  <form class="form-horizontal" action="addmember.php" method="post" role="form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter full name">
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="int" class="form-control" name="age" placeholder="Enter donor's age">
    </div>

    <div class="form-group">
      <label for="gender">Gender:</label>
      <label class="radio-inline"><input type="radio" name="gender">Male</label>
      <label class="radio-inline"><input type="radio" name="gender">Female</label>      
    </div>

    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="int" class="form-control" name="phone" placeholder="Enter phone number">
    </div>

    <div class="form-group">
      <label for="group">Blood group:</label>
      <select class="form-control" name="group">
        <option>A+</option>
        <option>B+</option>
        <option>O+</option>
        <option>AB+</option>
        <option>A-</option>
        <option>B-</option>
        <option>O-</option>
        <option>AB-</option>
      </select>
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <select class="form-control" name="city">
        <option>Aligarh</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
