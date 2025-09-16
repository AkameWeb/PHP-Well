<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Вывод масива </p>
    <?php
    //Первая ваиация записи массива 
    $Massive = [1,2,3,4,5,6];
    echo $Massive[0]; // выводит элемент по индексу 0 (показывает переменную 1)
    //Вторая вариация записи 
    $number = array(1,2,3,4,5,6);
    ?>
    <p>Вывод Ассоативного массива</p>
    <?php
    // Ассоативный массив
    $list = ["age" => 50, "name" => 'Alex'];
    echo $list["name"];?>
    <p>Вызов многомерного массива</p>
    <?php
    // Многомерный массив
    $matrics = [[1,2],[3,2],[6,2]];
    echo $matrics[1][1];
    ?>
</body>
</html>