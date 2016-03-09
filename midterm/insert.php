<?php
require("dbinfo.php");
$link = mysqli_connect("localhost", $username, $password, "Test");

// Check connection
if($link === false){
  die("ERROR: connection not established. " . mysqli_connect_error());
}

// Uses "escape" for security
$flavor = mysqli_real_escape_string($link, $_POST['flavor']); // needs to match with name on index.php
$scoops = mysqli_real_escape_string($link, $_POST['scoops']);

// Query to insert into database
$sql = "INSERT INTO sales (flavor, scoops) VALUES ('$flavor', '$scoops')";

// Checking insertion on database
if(mysqli_query($link, $sql)){
  echo "Records added to sales database.";
} else{
  echo "ERROR. Could not insert to sales database. " . mysqli_error($link);
}

// Closing connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Insertion</title>
  </head>
  <body>
    <br>
    <br>
    <!-- Link to get back to Home screen -->
    <a href="index.php">Home</a>
    <!-- <br>
    <br> -->
    <!-- Link to data list -->
    <!-- <a href="select.php">Show Data</a> -->
  </body>
</html>
