<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="name">Имя: </label>
        <input name="name" id = "name" type="text">

        <label for= "password">Пароль: </label>
        <input name="password" id = "password" type="text">

        <button type="submit">Проверка</button>
    </form>
    <?php
    $username = $_POST['name'];
    $password = $_POST['password'];

    if ($username == 'Admin' && $password == 'Admin'){
        echo 'Вход успешен';
    }else{
        echo '<p>Данного пользователя нет или некорректно введён пароль или имя</p>';
    }
   
    ?>
</body>
</html>