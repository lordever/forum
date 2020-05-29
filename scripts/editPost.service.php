<?php
    require_once("./connect.php");
    $forum_connection = new Forum_Connect;
    $new_message = trim($_POST["message"]);
    $id_post = trim($_POST["id_post"]);

    $forum_connection->update("posts", $new_message, "id_post", $id_post);

    $author_id = trim($_POST["author_id"]);
    $id_topic = trim($_POST['id_topic']);
    header("Location: http://localhost/forum/posts.php?id_topic=".$id_topic."&id_author=".$author_id);
?>





