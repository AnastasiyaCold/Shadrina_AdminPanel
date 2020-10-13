<?php
require 'db.php';
$name = $_POST['namecom'];
$pdo->query('INSERT INTO `comment` (`namecom`)
VALUES ("'.$name.'")');
header('Location: comm.php');