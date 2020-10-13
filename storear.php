<?php
require 'db.php';
$namear = $_POST['namear'];
$descriptionar = $_POST['descriptionar'];
$pdo->query('INSERT INTO `article` (`namear`,`descriptionar`)
VALUES ("'.$namear.'","'.$descriptionar.'")');
header('Location: pagef.php');