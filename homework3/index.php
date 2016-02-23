<?php
  include 'conf/conf.php';

  $obj = new Posts();
  $postsPDO = $obj->getPosts();
  $posts = array();
  foreach ($postsPDO as $key => $value) {
    $posts[$key]['id'] = $value['id'];
    $posts[$key]['title'] = $value['title'];
    $posts[$key]['content'] = $value['content'];
  }
  // pr($posts);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Interacting With Database</title>
  </head>
  <body>
    <?php
    if ($_GET['alert'] == 'success') {
      echo "<p style='color:green'>User successfully registered!</p>";
    }
    ?>
    <table>
      <thead>
        <tr>
          <th colspan="3">Posts Database</th>
        </tr>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Content</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($posts as $key => $value) {
            echo "<tr>";
              echo "<td>" . $value['id'] . "</td>";
              echo "<td>" . $value['title'] . "</td>";
              echo "<td>" . $value['content'] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
    <br>
    <a href="form.php">Create Post</a>
  </body>
</html>
