<?php
require 'db.php';
$pdo->query('DELETE FROM `category` WHERE `id`='.$_GET['id']);
header('Location: page.php');