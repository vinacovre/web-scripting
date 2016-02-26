<?php
include 'conf/conf.php';

$id = $_GET["id"];
$data["condition"] = "id = $id";
$obj = new Posts();
$postsPDO = $obj->getPosts($data);

foreach ($postsPDO as $key => $value) {
  $posts[$key]['id'] = $value['id'];
  $posts[$key]['title'] = $value['title'];
  $posts[$key]['content'] = $value['content'];
}
$post = reset($posts);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo $post['title']?></h1>
    <p><?php echo $post['content']?></p>
    <a href="index.php">Back</a>
  </body>
</html>
