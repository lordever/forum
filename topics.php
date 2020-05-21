<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Темы</title>
    <link rel="stylesheet" href="./styles/style.css"/>
</head>
<body>
<?php
require_once("./scripts/connect.php");
$forum_connection = new Forum_Connect;
$topics = $forum_connection->select("topics");
?>
<div class="container">
    <h2>Темы</h2>

    <table>
        <thead>
        <tr>
            <td>id_topic</td>
            <td>topic_name</td>
            <td>id_author</td>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($topics as $topic) {
            ?>
            <tr>
                <td>
                    <?php echo $topic['id_topic']; ?>
                </td>
                <td>
                    <a href="posts.php?<?php echo 'id_topic=' . $topic['id_topic'] . '&id_author=' . $topic['id_author']; ?>">
                        <?php echo $topic['topic_name']; ?>
                    </a>
                </td>
                <td>
                    <?php echo $topic['id_author']; ?>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <div class="links">
        <a href="index.php">Пользователи</a>
        <a href="newTopic.php">Новая тема</a>
    </div>
</div>
</body>
</html>
