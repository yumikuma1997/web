<?php require_once 'Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>conform</title>
</head>
<body>
<h1>編集中</h1>
<p>以下の内容でよろしいでしょうか？</p>
<dl>
<dt>本のタイトル:</dt>
<dd><?php print(e($_SESSION['name'])); ?></dd>
<dt>著者:</dt>
<dd><?php print(e($_SESSION['author'])); ?></dd>
<dt>出版社:</dt>
<dd><?php print(e($_SESSION['publisher'])); ?></dd>
<dt>本のジャンル:</dt>
<dd><?php print(e($_SESSION['genre'])); ?></dd>
<dt>言語:</dt>
<dd><?php print(e($_SESSION['language'])); ?></dd>
<dt>ページ数:</dt>
<dd><?php print(e($_SESSION['pages'])); ?></dd>
</dl>
</body>
</html>
