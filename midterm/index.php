<?php
require("dbinfo.php");
$link = mysqli_connect("localhost", $username, $password, "Test");

// Check connection
if($link === false){
  die("ERROR: connection not established. " . mysqli_connect_error());
}

$sql = "SELECT * FROM sales";
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/> <!-- Linking CSS File -->
    <title>Pace Ice Cream Shop</title>
  </head>
  <body>
    <h1>Pace Ice Cream Shop</h1>
    <form  action="insert.php" method="POST">
      flavor:
      <select id="selectionBox" name="flavor"> <!-- <select onchange="show()"> -->
        <option name="vanilla" value="vanilla">vanilla</option>
        <option name="chocolate" value="chocolate">chocolate</option>
        <option name="strawberry" value="strawberry">strawberry</option>
        <option name="mint_chocolate_chip" value="mint chocolate chip">mint chocolate chip</option>
        <option name="cotton_candy" value="cottom candy">cotton candy</option>
      </select>

      <!-- SCOOPS INSERTION -->
      <br><br>
      scoops:
      <input type="text" name="scoops" size="3">

      <!-- SUBMIT BUTTONS -->
      <br><br>
      <input type='submit' value='Submit'/>
      <button type="button" onclick="insert()">Submit by AJAX</button>
      <br><br>
      <a href="show.php">Show Sales!</a>

    <script type="text/javascript">

    // INSERTION WITH AJAX
    function insert(){
      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        // Verify connection
        if(xhttp.readyState == 4 && xhttp.status == 200){
        }
      };
      var flavor = document.getElementsByName('flavor')[0].value;
      var scoops = document.getElementsByName('scoops')[0].value;
      var queryString = "flavor=" + flavor + "&scoops=" + scoops;
      xhttp.open("POST", "insert.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(queryString);
      // location.assign("show.php?message=success");
    }
    </script>

    </form>
  </body>
</html>
