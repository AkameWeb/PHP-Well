<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <div>
                <label for = "X">Первая переменная</label>
                <input name="X" id="X" type="text">
            </div>
            <div>
                <label for="Y">Вторая переменная</label>
                <input name = "Y" id = "Y" type="text">
            </div>

            <div>
                <button type="submit">Вычислить</button>
            </div>
        </div>

    </form>
    <?php
    $x = $_POST["X"];
    $y= $_POST["Y"];
    
    function info($x, $y){
        return ($x+$y)**2;
    }
    echo info($x, $y);
    ?>
</body>
</html>