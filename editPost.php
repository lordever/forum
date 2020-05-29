<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование поста</title>
    <link rel="stylesheet" href="./styles/style.css"/>
</head>
<body>
<?php
$id_author = $_GET['id_author'];
$id_topic = $_GET['id_topic'];
$id_post = $_GET['id_post'];
$message = $_GET['message'];
?>
<div class="container">
    <h2>Редаутируем пост</h2>

    <form action="./scripts/editPost.service.php" method="post">
        <input type="hidden" name="id_post" value="<?php echo $id_post ?>"/>
        <input type="hidden" name="id_topic" value="<?php echo $id_topic ?>"/>
        <input type="hidden" name="author_id" value="<?php echo $id_author; ?>"/>
        <p>
            <textarea name="message" placeholder="message" required><?php echo $message; ?></textarea>
        </p>
        <div class="links">
            <a href="posts.php?id_topic=<?php echo $id_topic; ?>&id_author=<?php echo $id_author; ?>"">К списку
            постов</a>
            <input type="submit" value="Изменить"/>
        </div>
    </form>
</div>
</body>
</html>
