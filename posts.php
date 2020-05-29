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
                <td>author</td>
                <td>topic</td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($posts as $post) {
                ?>
                <tr>
                    <td><?php echo $post["id_post"]; ?></td>
                    <td><?php echo $post["message"]; ?></td>
                    <td>
                        <?php
                            $select_parameter_for_user = "id_user=" . $id_author;
                            $author = $forum_connection->select("users", $select_parameter_for_user);
                            echo $author[0]["name"]; //обратите внимание на сложную структуру объекта. Это двумерный массив. Почитать о них можете здесь https://puzzleweb.ru/php/22_arrays5.php
                        ?>
                    </td>
                    <td>
                        <?php
                            $select_parameter_for_topic = "id_topic=" . $id_topic;
                            $topic = $forum_connection->select("topics", $select_parameter_for_topic);
                            echo $topic[0]["topic_name"]; //обратите внимание на сложную структуру объекта. Это двумерный массив. Почитать о них можете здесь https://puzzleweb.ru/php/22_arrays5.php
                        ?>
                    </td>
                    <td>
                        <a class="edit-btn"
                           href="editPost.php?
                           id_post=<?php echo $post["id_post"]; ?>
                           &id_topic=<?php echo $post["id_topic"]; ?>
                           &id_author=<?php echo $post["id_author"]; ?>
                           &message=<?php echo $post["message"]; ?>">Изменить</a>
                    </td>
                    <td>
                        <a class="remove-btn"
                           href="removePost.service.php?
                           id_post=<?php print $post["id_post"]; ?>
                           &id_topic=<?php print trim($post["id_topic"]); ?>
                           &id_author=<?php print trim($post["id_author"]); ?>">Удалить</a>
                    </td>
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
        <a href="newPost.php?id_topic=<?php echo $id_topic; ?>&id_author=<?php echo $id_author; ?>">Создание нового
            поста</a>
    </div>
</div>
</body>
</html>
