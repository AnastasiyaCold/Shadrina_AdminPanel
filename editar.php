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
$stmt = $pdo->query('SELECT `id`, `namear`, `descriptionar` FROM `article` WHERE `id` = '.$_GET['id'])->fetch();
?>
<div class="container">
    <a href="pagef.php" class="btn btn-success">List article</a>
    <form action="upar.php" method="post">
        <div class="form-group">
            <label for="name">Name article</label>
            <input type="text" class="form-control" name="namear" value="<?=$stmt['namear'] ?>" id="namear">
            <label for="name">Description</label>
            <input type="text" class="form-control" name="descriptionar" value="<?=$stmt['descriptionar'] ?>" id="descriptionar">
        </div>
        <input type="hidden" name="id" value="<?= $stmt['id'] ?>">
        <input type="submit" class="btn btn-success" value="Edit article">
    </form>
</div>
</body>
</html>