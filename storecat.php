<?php
require 'db.php';
$name = $_POST['namecat'];
$pdo->query('INSERT INTO `category` (`namecat`) VALUES ("'.$name.'")');
header('Location: index.php');