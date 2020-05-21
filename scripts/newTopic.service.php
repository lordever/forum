<?php
    require_once("./connect.php");
    $forum_connection = new Forum_Connect;
    $topic_name = $_POST["topic_name"];
    $id_author = $_POST["id_author"];

    $insert_rows = array();
    $insert_rows[0] = "topic_name";
    $insert_rows[1] = "id_author";

    $insert_values = array();
    $insert_values[0] = $topic_name;
    $insert_values[1] = $id_author;


    $forum_connection->insert("topics", $insert_rows, $insert_values);
    header("Location: http://localhost/forum/topics.php");
?>