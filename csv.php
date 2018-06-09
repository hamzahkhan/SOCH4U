<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add CSV</title>
</head>
<body>
    <div class="container">
        <form enctype="multipart/form-data" method="post" id="uploadForm">
        <input name="csvUpload" id="upload" type="file" accept=".csv" class="left" />
        <input type="submit" value="Submit!" />
    </form>
    
    <?php
    $servername = "35.185.133.86";
    $username = "aamir";
    $password = "mypass";

    mysql_connect($servername, $username, $password);
    mysql_select_db("SOCH4U") or die(mysql_error());

    if (isset($_FILES['csvUpload'])) {
        $errors = array();
        $allowed_ext = array('.csv');

        $file_name = $_FILES['csvUpload']['name'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $file_size = $_FILES['csvUpload']['size'];
        $file_tmp = $_FILES['csvUpload']['tmp_name'];

        if (in_array($allowed_ext) === false) {
            $errors[] = 'The file extension is not valid.';
        }
        if ($file_size > 10485760) {
            $errors[] = 'The file exceeds the limit of 10MB';
        }
        if (empty($errors)) {


            $handle = fopen($file_tmp, "r");
            while (($fileop = fgetcsv($handle, ";") && fgetcsv($handle, ",")) !== false) {
                $NAME = mysql_real_escape_string($connect,$fileop[0]);
                $AGE = mysql_real_escape_string($connect, $fileop[1]);
                $GENDER = mysql_real_escape_string($connect, $fileop[2]);
                $PHONE = mysql_real_escape_string($connect, $fileop[3]);
                $BLOOD_GROUP = mysql_real_escape_string($connect, $fileop[4]);
                $CITY = mysql_real_escape_string($connect, $fileop[5]);
                
                $sq1 = mysql_query("INSERT INTO `SOCH4U`.`new_table` (`name`, `age`, `gender`, `phone`, `blood_group`, `city`) VALUES ('$NAME','$AGE','$GENDER','$PHONE','$BLOOD_GROUP','$CITY')");
            }
            fclose($handle);
            if ($sq1) {
                echo 'Users have been added successfully!';
            }
        }

        else {
            echo 'Not added';
        }
    }
    ?>

    </div>

    
</body>
</html>
