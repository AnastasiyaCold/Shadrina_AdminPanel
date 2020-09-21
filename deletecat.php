<?php
require 'db.php';
$pdo->query('DELETE FROM `category` WHERE `id`='.$_POST['id']);
header('Location: index.php');