<?php
/* Attempt to connect to MySQL Server ($link is the connection).
  This assumes you are running MySQL Server with default setting.
  Default setting: (<server>, <user>, <password>, <database>). */
$link = mysqli_connect("localhost", "root", "0263", "midterm");

// Check connection
if($link === false){
  die("ERROR: connection not established. " . mysqli_connect_error());
}

// Uses "escape" for security
$name = mysqli_real_escape_string($link, $_POST['Name']); // needs to match with name on index.html
$size = mysqli_real_escape_string($link, $_POST['Size']);

// Query to insert into database
$sql = "INSERT INTO Hamburgers (name, size) VALUES ('$name', '$size')"; //key-value

// Checking insertion on database
if(mysqli_query($link, $sql)){
  echo "Records added to Hamburger database.";
} else{
  echo "ERROR. Could not insert to Hamburger database. " . mysqli_error($link);
}

// Closing connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hamburger Insertion</title>
  </head>
  <body>
    <br>
    <br>
    <!-- Link to get back to Hamburger screen (home) -->
    <a href="index.html">BACK TO HAMBURGERS</a>
    <br>
    <br>
    <!-- Link to Hamburgers list -->
    <a href="select.php">SHOW HAMBURGERS</a>
  </body>
</html>
