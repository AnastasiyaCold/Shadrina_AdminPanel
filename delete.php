<?php
require 'db.php';
$pdo->query('DELETE FROM `product` WHERE `id`='.$_GET['id']);
header('Location: pagetwo.php');
