<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый пост</title>
    <link rel="stylesheet" href="./styles/style.css"/>
</head>
<body>
<?php
$id_author = $_GET['id_author'];
$id_topic = $_GET['id_topic'];
?>
<div class="container">
    <h2>Новый пост</h2>

    <form action="./scripts/newPost.service.php" method="post">
        <input type="hidden" name="id_topic" value="<?php echo $id_topic ?>" />
        <p>
            <input type="text" name="author_id" placeholder="author_id" value="<?php echo $id_author;?>" required/>
        </p>
        <p>
            <textarea name="message" placeholder="message" required></textarea>
        </p>
        <div class="links">
            <a href="posts.php?id_topic=<?php echo $id_topic;?>&id_author=<?php echo $id_author;?>"">К списку постов</a>
            <input type="submit" value="Создать"/>
        </div>
    </form>
</div>
</body>
</html>
