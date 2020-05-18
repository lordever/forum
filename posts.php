<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Посты</title>
    <link rel="stylesheet" href="./styles/style.css"/>
</head>
<body>
<?php
require_once("./scripts/connect.php");
$forum_connection = new Forum_Connect;
$id_author = $_GET['id_author'];
$id_topic = $_GET['id_topic'];
$select_parameter = "id_author=" . $id_author . " AND " . "id_topic=" . $id_topic;
$posts = $forum_connection->select("posts", $select_parameter);
?>
<div class="container">
    <h2>Посты</h2>
    <?php if (count($posts) > 0) { ?>
        <table>
            <thead>
            <tr>
                <td>id_post</td>
                <td>message</td>
                <td>id_author</td>
                <td>id_topic</td>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($posts as $post) {
                ?>
                <tr>
                    <td><?php echo $post["id_post"]; ?></td>
                    <td><?php echo $post["message"]; ?></td>
                    <td><?php echo $post["id_author"]; ?></td>
                    <td><?php echo $post["id_topic"]; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "<h2>В данный момент у данной темы нет ни одного поста</h2>";
    }
    ?>
    <div class="links">
        <a href="topics.php">Просмотр тем</a>
        <a href="newPost.php?id_topic=<?php echo $id_topic;?>&id_author=<?php echo $id_author;?>">Создание нового поста</a>
    </div>
</div>
</body>
</html>
