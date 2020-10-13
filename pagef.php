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
    <a href="pagef.php">Articles</a>
    <a href="index.php">Log out</a>
</nav>
<div class="container">
    <form name="search" method="post" action="searchar.php">
        <a href="addar.php" class="btn btn-success">Add article</a>
        <label>
            <input id="search" name="search">
        </label>
        <input type="submit" class="btn btn-primary" value="Search">
    </form>
    <table class="table table-success">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Comments</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'db.php';
        $stmt = $pdo->query('SELECT * FROM `article`');
        while ($article = $stmt->fetch()):
            ?>
            <tr>
                <td><?= $article['id'] ?></td>
                <td><?= $article['namear'] ?></td>
                <td><?= $article['descriptionar'] ?></td>
                <td><?= $article['id_comm'] ?></td>
                <td><a class="btn btn-secondary" href="editar.php?id=<?= $article['id'] ?>">Edit</a></td>
                <td><a class="btn btn-danger" href="deletear.php?id=<?= $article['id'] ?>">Delete</a></td>
            </tr>
        <?php
        endwhile;
        ?>
        </tbody>
    </table>
</div>
</body>
</html>