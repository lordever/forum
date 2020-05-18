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
        <h2>Новый пользователь</h2>

       <form action="#" method="post">
        <p>
            <input type="text" name="name" placeholder="name" required />
        </p>
        <p>
            <input type="text" name="email" placeholder="email" required />
        </p>   
        <p>
            <input type="password" name="password" placeholder="password" required />
        </p>      
        <div class="links">
            <a href="index.php">К списку пользователей</a>
            <input type="submit" value="Создать" />
        </div>
       </form>
    </div>
</body>
</html>