<?php
require 'db.php';
$pdo->query('DELETE FROM `product` WHERE `id`='.$_POST['id']);
header('Location: pagetwo.php');
