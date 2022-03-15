<?php
    include 'database.php';

    if(isset($_POST['name']) & isset($_POST['comment']) & isset($_POST['valoracion']) ){
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $val = $_POST['valoracion'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $sql = "INSERT INTO `blog_comentarios` (`id`, `user`, `comentario`, `ip`) VALUES (NULL, '$name', '$comment', '$ip');";
        mysqli_query($link, $sql);
        header('location: /');
    }
?>