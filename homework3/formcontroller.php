<?php
include 'conf/conf.php';

if ($_POST) {
  $obj = new Posts();
  $obj->setPosts($_POST['title'], $_POST['content'], 1);
}
?>
