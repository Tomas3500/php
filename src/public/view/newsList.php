<?php
include '../controllers/News.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>viewNews</title>
</head>
<body>
<ul>
    <?php
    $newsClass = new News();
    $newsList = $newsClass->index();
    foreach ($newsList as $news) {
        echo "<li> $news->name </li>";
        echo "<li> $news->author </li>";
        echo "<li> $news->date </li>";
        echo "<li> $news->description </li>";
    }
    ?>
</ul>
</body>
</html>