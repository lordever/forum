<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользователи</title>
    <link rel="stylesheet" href="./styles/style.css" />
</head>
<body>
<?php
require_once("./scripts/connect.php");
$forum_connection = new Forum_Connect;
$users = $forum_connection->select("users");
?>
    <div class="container">
        <h2>Пользователи</h2>

        <table>
            <thead>
                <tr>
                    <td>id_user</td>
                    <td>name</td>
                    <td>email</td>
                    <td>password</td>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($users as $user) {
                ?>
                <tr>
                    <td><?php echo $user["id_user"] ?></td>
                    <td><?php echo $user["name"] ?></td>
                    <td><?php echo $user["email"] ?></td>
                    <td><?php echo $user["password"] ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="links">
            <a href="topics.php">Просмотр тем</a>
            <a href="newUser.php">Создание нового юзера</a>
        </div>
    </div>
</body>
</html>