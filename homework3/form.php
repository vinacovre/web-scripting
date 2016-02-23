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
      <textarea name="post_content" rows="20" cols="100">
      </textarea>
      <br>
      <input type="submit">
    </form>
    <br>
    <a href="index.php">Show Posts</a>
  </body>
</html>
