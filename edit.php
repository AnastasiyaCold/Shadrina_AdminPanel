<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">
    <title>AdminPanel</title>
</head>
<body>
<?php
require 'db.php';
$stmt = $pdo->query('SELECT * FROM `product` WHERE `id` = '.$_GET['id'])->fetch();
?>
<div class="container">
    <a href="pagetwo.php" class="btn btn-success">List product</a>
    <form action="upd.php" method="post">
        <div class="form-group">
            <label for="name">Name product</label>
            <input type="text" class="form-control" name="name" value="<?=$stmt['name'] ?>" id="name">
            <label for="name">Description</label>
            <input type="text" class="form-control" name="description" value="<?=$stmt['description'] ?>" id="description">
            <label for="name">Price</label>
            <input type="text" class="form-control" name="price" value="<?=$stmt['price'] ?>" id="price">
            <label for="name">Category</label>
            <input type="text" class="form-control" name="category" value="<?=$stmt['category'] ?>" id="category">
        </div>
        <input type="hidden" name="id" value="<?= $stmt['id'] ?>">
        <input type="submit" class="btn btn-success">
    </form>
</div>
</body>
</html>