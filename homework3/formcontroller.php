<?php
include 'conf/conf.php';

if ($_POST) {
  $obj = new Posts();
  $obj->setPosts($_POST['post_title'], $_POST['post_content'], 1);
}
?>
