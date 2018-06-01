<!DOCTYPE html>
<html lang="en">
<head>
  <title>New query</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php include_once ("header.php"); ?>


<div class="container">
  <h2>SOCH BLOOD BANK</h2>
  <p>Please enter details of blood units below</p>
  <form class="form-inline" role="form" action="newquery.php" method="post">
    <div class="form-group">
      <label for="selunit">No. of units:</label>
      <select class="form-control" name="selunit">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="selgrp">Blood group:</label>
      <select class="form-control" name="selgrp">
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
      <label for="selhosp">Hospital:</label>
      <select class="form-control" name="selhosp">
        <option>JNMC Aligarh</option>
      </select>
    </div>
    <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
    </div>
  </div>
  </form>

</body>
</html>
