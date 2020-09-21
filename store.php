<?php
require 'db.php';
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$pdo->query('INSERT INTO `product` (`name`,`description`,`price`,`category`)
VALUES ("'.$name.'","'.$description.'","'.$price.'","'.$category.'")');
header('Location: pagetwo.php');