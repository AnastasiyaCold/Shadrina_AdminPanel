<?php
require 'db.php';
$pdo->query('UPDATE `category` SET `namecat` = "'.$_POST['namecat'].'" WHERE `id`='.$_POST['id']);
header('Location: page.php');