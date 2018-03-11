<?php
session_start();
require_once __DIR__ . '/classes/GuestBook.php';

}

$path = __DIR__ . '/data/guestbook.txt';
$guestBook = new GuestBook($path);
$records = $guestBook->getData();
?>


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
<a href="/">На главную</a>
<h2>Гостевая книга</h2>
<?php foreach ($records as $record): ?>
    <p><?php echo $record; ?></p>
<?php endforeach; ?>
<form action="/newRecord.php" method="post">
    <input type="text" name="text">
    <button type="submit">Отправить</button>
</form>

</body>
</html>
