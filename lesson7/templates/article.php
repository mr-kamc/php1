<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/news.php">Все новости</a>
<a href="/">Гостевая книга</a>
<a href="/gallery.php">Галерея</a>
<h2>Новости</h2>
<article>
    <h3><?php echo $article->title; ?></h3>
    <p><?php echo $article->text; ?></p>
</article>
</body>
</html>