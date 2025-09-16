<?php

session_start();

unset($_SESSION['user_name']);
unset($_SESSION['user_emeil']);
unset($_SESSION['user_subject']);
unset($_SESSION['user_message']);

unset($_SESSION['$error_name']);
unset($_SESSION['$error_emeil']);
unset($_SESSION['$error_message']);

unset($_SESSION['mail']);

function redirect(){
    header('Location: contakt.php');
    exit;
}
    $user_name = htmlspecialchars(trim($_POST['User']));
    $user_emeil = htmlspecialchars(trim($_POST['emeil']));
    $user_subject = htmlspecialchars(trim($_POST['subject']));
    $user_message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['User']= $user_name;
    $_SESSION['emeil']= $user_emeil;
    $_SESSION['subject']= $user_subject;
    $_SESSION['message']= $user_message;

    if(strlen($user_name) <=1){
         $_SESSION['$error_name'] = "Введите имя корректно";
         redirect();

    }else if(strlen($user_emeil) <=5 || strpos( $user_emeil,"@")==false){
         $_SESSION['$error_emeil'] = "Введите emeil корректно";
         redirect();
       
    }else if(strlen($user_message) <=1 && strlen($user_subject) <=1){
         $_SESSION['$error_message'] = "Введите корректно сообщения";
         redirect();
        
    }else{
        $_SESSION['$error_name'] = '';
        $_SESSION['$error_emeil'] = '';
        $_SESSION['$error_message'] = '';
        

        
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset= utf-8\r\n";
        mail("mejkrejden@gmail.com", $user_subject, $user_message,$headers);
        $_SESSION['mail'] ="Сообщение отправленно на почту";
        redirect();

    }