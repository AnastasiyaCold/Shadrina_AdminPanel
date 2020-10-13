<?php
require 'db.php';
$pdo->query('UPDATE `article` SET `namear` = "'.$_POST['namear'].'",
`descriptionar` = "'.$_POST['descriptionar'].'" WHERE `id`='.$_POST['id']);
header('Location: pagef.php');