<?php
$servername = "35.185.133.86";
$username = "aamir";
$password = "mypass";

$connect = mysqli_connect($servername, $username, $password);
// echo "Database connected";

$file = fopen("newdetails.csv","r");
while(! feof($file))
  {
  	$getData = fgetcsv($file);
  	$sql = "INSERT into `SOCH4U`.`new_table` (`name`, `age`, `gender`, `phone`, `blood_group`, `city`) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
  	$result = mysqli_query($connect, $sql);
  }
  if(!isset($result))
	{
		echo 'Invalid file';		
	}
	else 
	{
		echo 'CSV Uploaded';
	}
fclose($file);
?>
