<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) 
                                VALUES ('$title', '$content','$author')");