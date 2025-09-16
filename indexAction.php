<html>
    <head>
    </head>
    <boby>
    <form action="indexAction.php" method="post">
        <label for="name">Имя:</label>
        <input name="name" id="name" type="text">

        <label for="age">Возраст:</label>
        <input name="age" id="age" type="number">

        <button type="submit">Отправить</button>
    </form>

       Привет, <?php echo htmlspecialchars($_POST['name']); ?>.
        Тебе <?php echo (int) $_POST['age']; ?> лет.
    </body>
</html>