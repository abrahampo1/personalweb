<?php
    include 'database.php';

    if(isset($_POST['user']) & isset($_POST['comment']) & isset($_POST['valoracion']) ){
        $name = $_POST['user'];
        $comment = $_POST['comment'];
        $val = $_POST['valoracion'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $sql = "INSERT INTO `blog_comentarios` (`id`, `user`, `comentario`, `ip`) VALUES (NULL, '$name', '$comment', '$ip');";
        mysqli_query($link, $sql);
        header('location: /');
    }
?>