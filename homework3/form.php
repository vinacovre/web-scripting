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

<DOCTYPE! html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Interacting With Database</title>
  </head>

  <body>
    <h1 style="text-align:center">Blog</h1>

    <h2>Post</h2>
    <form action="formcontroller.php" method="POST">
      Title:<br>
      <input type="text" name="post_title" size="102"><br>
      Content:<br>
      <textarea name="post_content" rows="20" cols="100"></textarea>
      <br>
      <select onchange="choosePost(this.value)">
        <?php foreach ($posts as $key => $value) { ?>
          <option value="<?php echo $value["id"] ?>"><?php echo $value["title"]; ?></option>
        <?php } ?>
      </select>
      <br>
      <input type="submit" value="Submit by PHP">
      <button onclick="sendFormByAjax()" type="button">Submit by AJAX</button>
    </form>
    <br>
    <a href="index.php">Show Posts</a>
    <script type="text/javascript" src="js/ajax.js"></script>
  </body>
</html>
