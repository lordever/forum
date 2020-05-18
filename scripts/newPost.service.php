<?php
    require_once("./connect.php");
    $forum_connection = new Forum_Connect;
    $message = $_POST["message"];
    $author_id = $_POST["author_id"];
    $id_topic = $_POST['id_topic'];

    $insert_rows = array();
    $insert_rows[0] = "message";
    $insert_rows[1] = "id_author";
    $insert_rows[2] = "id_topic";

    $insert_values = array();
    $insert_values[0] = $message;
    $insert_values[1] = $author_id;
    $insert_values[2] = $id_topic;


    $forum_connection->insert("posts", $insert_rows, $insert_values);
    header("Location: http://localhost/forum/posts.php?id_topic=".$id_topic."&id_author=".$author_id);
?>
