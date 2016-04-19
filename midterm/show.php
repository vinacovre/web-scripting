<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show Database</title>
  </head>
  <body>
    <?php

    // Verify the return of AJAX message after insert
    if ($_GET['message'] == "success") {
      echo "Records added to database.";
    }

    require("dbinfo.php");
    $link = mysqli_connect("localhost", $username, $password, "Test");

    // Check connection
    if($link === false){
      die("ERROR: connection not established. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM sales";
    $result = mysqli_query($link, $sql);

    if($result){
      if(mysqli_num_rows($result) > 0){
        echo "<table width='39%' border='.15em solid black'>";
          echo "<tr>";
            echo "<th colspan='4'>Sales</th>";
          echo "</tr>";

          echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Flavor</th>";
            echo "<th>Scoops</th>";
            echo "<th>Time</th>";
          echo "</tr>";
        while ($row = mysqli_fetch_array($result)){
          echo "<tr>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['flavor'] . "</td>";
            echo "<td>" . $row['scoops'] . "</td>";
            echo "<td>". $row['time'] . "</td>";
          echo "</tr>";
        }
        echo "<table>";

        mysqli_free_result($result);
      } else {
        echo "No records matching your query were found.";
      }
    } else {
      echo "ERROR: Could not communicate with database. " . mysqli_error($link);
    }
    ?>

    <br>
    <!-- Link to get back to Hamburger screen (home) -->
    <a href="index.php">Home</a>
  </body>
</html>
