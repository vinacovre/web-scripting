<!-- JUST FOR EXIBITION WITH AJAX -->
<?php
require("dbinfo.php");
$link = mysqli_connect("localhost", $username, $password, "midterm");

// Check connection
if($link === false){
  die("ERROR: connection not established. " . mysqli_connect_error());
}

$sql = "SELECT * FROM Hamburgers";
$result = mysqli_query($link, $sql);
?>
<!-- DON'T USE IT, IF NOT ASKED SO -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hamburgers</title>
  </head>
  <body>
    <h1>Hamburgers</h1>

    <!-- Add a insert form to interact with database (insert.php) -->
    <form action="insert.php" method="post">
      <p>
        <label for="name">Name:</label>
        <input type="text" name="Name" id="name">
      </p>
      <p>
        <label for="size">Size:</label>
        <input type="text" name="Size" id="size">
      </p>
      <input type="submit" value="Submit">
      <button type="button" onclick="insertHamburgers()">Submit by AJAX</button>

      <br>
      <br>
      
      <!-- Link to Hamburgers list -->
      <a href="select.php">SHOW HAMBURGERS</a>
    </form>

    <br>
    <br>

    <!-- JUST FOR EXIBITION WITH AJAX -->
    <form>
    <select onchange="show()">
    <option value="">Select a Hamburger:</option>
      <?php
        while ($row = mysqli_fetch_array($result)){
          echo "<option value='".$row["id"]."'>{$row['name']} - {$row['size']}</option>";
        }
      ?>
    </select>
    </form>
    <!-- DON'T USE IT, IF NOT ASKED SO -->

    <script type="text/javascript">

    // INSERTION WITH AJAX
    function insertHamburgers(){
      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4 && xhttp.status == 200){ // Verify connection
          // document.getElementById('txtHint').innerHTML = xhttp.responseText;
          // document.getElementById("submitted").innerHTML = "form submitted";
        }
      };
      /*var name = document.getElementById('name').value;
      var breed = document.getElementById('size').value;
      var queryString = "?Name=" + name ;   queryString +=  "&Breed=" + breed + "&Age=" + age;
      xhttp.open("GET", "insert.php" + queryString, true);
      xhttp.send(null); */
      xhttp.open("POST", "insert.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      var name, size;
      name = document.getElementsByName('Name')[0].value;
      size = document.getElementsByName('Size')[0].value;
      xhttp.send("Name=" + name + "&Size=" + size);
      location.assign("select.php?message=success");
    }
    </script>

  </body>
</html>
