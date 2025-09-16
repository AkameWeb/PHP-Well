<?php
$username = $_POST['username'];
$userfil = $_POST['userfil'];
$emeil = $_POST['emeil'];
$password = $_POST['password'];

if(trim($username)=="" || trim($userfil)==""||trim($emeil)==""||trim($password)==""){
    echo "Введите все данные";
}
$pass = md5($password);
?>