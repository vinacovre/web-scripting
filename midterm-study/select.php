<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show Hamburgers</title>
  </head>
  <body>
    <?php

    // Verify the return of AJAX message after insert
    if ($_GET['message'] == "success") {
      echo "Records added to Hamburger database.";
    }

    /* Attempt to connect to MySQL Server ($link is the connection).
      This assumes you are running MySQL Server with default setting.
      Default setting: (<server>, <user>, <password>, <database>). */
    require("dbinfo.php");
    $link = mysqli_connect("localhost", $username, $password, "midterm");

    // Check connection
    if($link === false){
      die("ERROR: connection not established. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Hamburgers";
    $result = mysqli_query($link, $sql);

    if($result){
      if(mysqli_num_rows($result) > 0){
        echo "<table width='39%' border='.15em solid black'>";
          echo "<tr>";
            echo "<th colspan='4'>Hamburgers</th>";
          echo "</tr>";

          echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Name</th>";
            echo "<th>Size</th>";
          echo "</tr>";
        while ($row = mysqli_fetch_array($result)){
          echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['size'] . "</td>";
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
    <a href="index.php">BACK TO HAMBURGERS</a>
  </body>
</html>
