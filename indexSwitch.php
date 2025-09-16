<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x =6;
    switch($x){
        case $x > 0:
            echo "x > 0";
            break;
        case $x < 0:
            echo "x < 0";
            break;
        case $x == 0:
            echo "x == 0";
            break;
        default:
            echo " х не число";
            break;
    }
    ?>
</body>
</html>