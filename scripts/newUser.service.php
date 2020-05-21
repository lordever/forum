<?php
    require_once("./connect.php");
    $forum_connection = new Forum_Connect;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $insert_rows = array();
    $insert_rows[0] = "name";
    $insert_rows[1] = "email";
    $insert_rows[2] = "password";

    $insert_values = array();
    $insert_values[0] = $name;
    $insert_values[1] = $email;
    $insert_values[2] = $password;


    $forum_connection->insert("users", $insert_rows, $insert_values);
    header("Location: http://localhost/forum/index.php");
?>