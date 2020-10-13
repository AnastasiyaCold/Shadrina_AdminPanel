<?php
require 'db.php';
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$photo = $_POST['photo'];
$pdo->query('INSERT INTO `product` (`name`,`description`,`price`,`category`, `photo`)
VALUES ("'.$name.'","'.$description.'","'.$price.'","'.$category.'","'.$photo.'")');
header('Location: pagetwo.php');