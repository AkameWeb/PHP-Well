<html>
    <head>
    </head>
    <body>
      <?php

        if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
        ?>
        <h3>Функция str_contains() возвращает true</h3>
        <p>Вы пользуетесь браузером Chrome.</p>
        <?php
        } else {
        ?>
            <h3>Функция str_contains() возвращает false</h3>
            <p>Вы не пользуетесь браузером Chrome.</p>
        <?php
        }

        ?>
        
        
        
    </body>
</html>