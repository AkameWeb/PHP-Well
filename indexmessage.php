<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $message = "Сообщение";
        $to = "mejkrejden@gmail.com";
        $from = "mejkrejden@gmail.com";
        $subject="Тема сообщения";

        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset= utf-8\r\n";

        mail($to, $subject, $message, $headers);
    ?>
</body>
</html>