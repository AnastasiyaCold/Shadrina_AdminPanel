<?php
require 'db.php';
$pdo->query('DELETE FROM `article` WHERE `id`='.$_GET['id']);
header('Location: pagef.php');