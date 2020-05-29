<?php
    require_once("./scripts/connect.php");
    $forum_connection = new Forum_Connect;
    $id_post = trim($_GET["id_post"]);

    $forum_connection->remove("posts", "id_post", $id_post);

    $id_author = trim($_GET["id_author"]);
    $id_topic = trim($_GET["id_topic"]);
    header("Location: http://localhost/forum/posts.php?id_topic=".$id_topic."&id_author=".$id_author);
?>
