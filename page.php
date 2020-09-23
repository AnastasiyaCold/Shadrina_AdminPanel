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
<nav>
    <a href="page.php">Categories</a>
    <a href="pagetwo.php">Products</a>
</nav>
<div class="container">
    <a href="addcat.php" class="btn btn-success">Add category</a>
    <table class="table table-success">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'db.php';
        $stmt = $pdo->query('SELECT * FROM `category`');
        while ($category = $stmt->fetch()):
            ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['namecat'] ?></td>
                <td><a class="btn btn-secondary" href="editcat.php?id=<?= $category['id'] ?>">Edit</a></td>
                <td><a class="btn btn-danger" href="deletecat.php?id=<?= $category['id'] ?>">Delete</a></td>
            </tr>
        <?php
        endwhile;
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
