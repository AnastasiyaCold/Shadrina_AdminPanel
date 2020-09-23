<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=adminpanel;charset=utf8',
    'root',
    '');
$login = $_POST['login'];
$password = $_POST['password'];
$user = $pdo->query('SELECT `login`, `password` FROM admin WHERE login="'. $login .'" AND password="'. $password .'"')->fetch();
if ($user == true){
    echo header('location:page.php');
}