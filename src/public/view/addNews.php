<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <title>addNew</title>
</head>
<body>
<div class="form-new">
    <form action="../action/createNews.php" method="post" name="addNew" enctype="multipart/form-data">
        <p>
            <lable>Название новости:<input type="text" name="nameNews"
                                           value="<?php echo isset($_COOKIE['nameNews']) ? $_COOKIE['nameNews'] : '' ?>">
            </lable>
            <span class="error">
                 <?php
                 if (isset($_COOKIE['error_name'])) {
                     echo $_COOKIE['error_name'];
                 }

                 ?>
            </span>
        </p>
        <p>
            <lable>Краткое описание новости:<input type="text" name="descNews"
                                                   value="<?php echo isset($_COOKIE['descNews']) ? $_COOKIE['descNews'] : '' ?>">
            </lable>
            <span class="error">
                 <?php
                 if (isset($_COOKIE['error_desc'])) {
                     echo $_COOKIE['error_desc'];
                 }

                 ?>
            </span>
        </p>
        <p>
            <lable>Дата создания новости:<input type="date" name="dataNews"</lable>
            <span class="error">
                 <?php
                 if (isset($_COOKIE['today'])) echo $_COOKIE['today'];
                 ?>
            </span>
        </p>
        <hr>
        <p>
            <lable>Черновик:<input type="radio" name="radio" value="one"></lable>
        </p>
        <p>
            <lable>Опубликовано:<input type="radio" name="radio" value="two"></lable>
        </p>
        <div class="text">
            <p>Текст новости</p>
            <textarea name="textDescripton" id="text" cols="100" rows="20">
                <?php echo isset($_COOKIE['textDescripton']) ? $_COOKIE['textDescripton'] : '' ?>"
            </textarea>
            <span class="error">
                   <?php
                   if (isset($_COOKIE['error_descripton'])) {
                       echo $_COOKIE['error_descripton'];
                   }
                   ?>
            </span>
        </div>
        <p>

            <lable>Автор новости:<input type="text[]" name="authorNews"
                                        value="<?php echo isset($_COOKIE['authorNews']) ? $_COOKIE['authorNews'] : '' ?>">
            </lable>
            <?php
            if (isset($_COOKIE['error_author'])) {
                echo $_COOKIE['error_author'];
            }
            ?>
        </p>
        <p>
            <lable>Загрузить фото: <input type="file" name="uploadFile"></lable>
            <span class="error-file">
                <?php
                if (isset($_COOKIE['error_file'])) {
                    echo $_COOKIE['error_file'];
                } else {
                    echo $_COOKIE['error_bigFile'];
                }
                ?>
            </span>
        </p>
        <p>
            <lable><input type="submit" name="btn" value="Добавить"></lable>
        </p>
    </form>
</div>
</body>
</html>