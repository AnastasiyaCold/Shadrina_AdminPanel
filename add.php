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
<div class="container">
    <form action="store.php" method="post">
        <div class="form-group">
            <label for="name">Name product</label>
            <input type="text" id="name" class="form-control" name="name">
            <label for="name">Description</label>
            <input type="text" id="description" class="form-control" name="description">
            <label for="name">Price</label>
            <input type="text" id="price" class="form-control" name="price">
            <label for="name">Category</label>
            <select class="form-control" id="">
                <?php
                require 'db.php';
                $stmt = $pdo->query('SELECT `id` FROM `category`');

                    ?>
            </select>
        </div>
        <input type="submit" class="btn btn-success">
    </form>
</div>
</body>
</html>