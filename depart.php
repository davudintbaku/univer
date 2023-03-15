<?php

// Include the database configuration file
include_once 'config.php';

$ad = $_POST['depart_name'];
$mudur = $_POST['depart_manager'];
$fenn= $_POST['form_data'];
$muellim= $_POST['depart_teacher'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

foreach ($fenn as $data) {
    $sql = "INSERT INTO kafedra (ad,mudur,fenn,muellim) VALUES ('$ad','$mudur','$data','$muellim')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
