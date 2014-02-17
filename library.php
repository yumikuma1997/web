<?php
require_once 'Encode.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <title>library</title>
</head>
<body>
<h1>●編集中●</h1>
<form method="POST" action="conform.php">
   <div class="container">
      <label for="name">本のタイトル:</label><br />
      <input type="text" id="name" name="name"
         value="<?php print(e($_SESSION['name'])); ?>" />
   </div>
   <div class="container">
      <label for="author">著者:</label><br />
      <input type="author" id="author" name="author"
         value="<?php print(e($_SESSION['author'])); ?>" />
   </div>
   <div class="container">
      <label for="publisher">出版社:</label><br />
      <input type="publisher" id="publisher" name="publisher"
         value="<?php print(e($_SESSION['publisher'])); ?>" />
   </div>
   <div class="container">
      <label for="genre">本のジャンル:</label><br />
      <input type="genre" id="genre" name="genre"
         value="<?php print(e($_SESSION['genre'])); ?>" />
   </div>
   <div class="container">
      <label for="language">言語:</label><br />
      <input type="language" id="language" name="language"
         value="<?php print(e($_SESSION['language'])); ?>" />
   </div>
   <div class="container">
      <label for="pages">ページ数:</label><br />
      <input type="pages" id="pages" name="pages"
         value="<?php print(e($_SESSION['pages'])); ?>" />
   </div>
   <input type="submit" value="保存する" />
</form>
</body>
</html>
