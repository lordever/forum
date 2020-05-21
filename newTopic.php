<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый пользователь</title>
    <link rel="stylesheet" href="./styles/style.css" />
</head>
<body>
    <div class="container">
        <h2>Новая тема</h2>

       <form action="./scripts/newTopic.service.php" method="post">
        <p>
            <input type="text" name="topic_name" placeholder="topic_name" required />
        </p>
        <p>
            <input type="text" name="id_author" placeholder="id_author" required />
        </p>     
        <div class="links">
            <a href="topics.php">К списку тем</a>
            <input type="submit" value="Создать" />
        </div>
       </form>
    </div>
</body>
</html>