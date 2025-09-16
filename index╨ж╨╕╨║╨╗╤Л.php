<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $massiv = [1,2,3,4,5,6];
    echo ' <p>Вывод массива через цикл for</p>';
    for($i = 0; $i<count($massiv); $i++){
        echo $massiv[$i];
    }
    ?><?php
    echo '<p>Вывод массива While</p>';
    while($i < 10){
        $i++;
        echo $i;
        //Данная переменная будет начинаться с 7 так как массив в себе имеет 6 элементов
        // в новым цикле мы использует тужу переменную из-за этого покажется 7 до 10
    }
    ?><?php
    $j = 20;
    echo"<p>Вывод массива do-while</p>";
    do{
        $j--;
        echo $j, " ";
    }while($j > 0);
    ?>
    <p>Операторы циклов</p>
    <?php
    for($x = 0; $x <10; $x++){
        if($x % 2 ==0){
            continue;
            //break;
        }
        echo $x;
    }
    ?>
    <p>Цикл foreach</p>
    <?php
    $list = ["1"=>1,"2"=>3,"3"=>76,"4"=>45];
    foreach($list as $item => $value){
        echo " Key: ",$item," Value: ", $value, "<br>";
    }
    ?>
</body>
</html>