<?php
require 'db.php';
$pdo->query('UPDATE `product` SET `name` = "'.$_POST['name'].'",
`description` = "'.$_POST['description'].'",`price` = "'.$_POST['price'].'",
`category` = "'.$_POST['category'].'",`photo` = "'.$_POST['photo'].'" WHERE `id`='.$_POST['id']);
header('Location: pagetwo.php');
