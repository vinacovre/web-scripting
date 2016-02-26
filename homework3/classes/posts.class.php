<?php
class Posts extends CRUD{
  function getPosts($data = ""){
    $data['table'] = 'posts';
    return $this->read($data);
  }

  function setPosts($title, $content, $user_id){
    $data['table'] = "posts";
    $data['fields']['title'] = $title;
    $data['fields']['content'] = $content;
    // This is necessary because there is no interface that deals with users
    $data['fields']['user_id'] = 1;
    $this->create($data);
    header("Location: index.php?alert=success");
  }
}
?>
