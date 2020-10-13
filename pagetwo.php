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
    <form name="search" method="post" action="search.php">
        <a href="add.php" class="btn btn-success">Add product</a>
        <label>
            <input id="search" name="search">
        </label>
        <input type="submit" class="btn btn-primary" value="Search">
    </form>
<table class="table table-success">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Photo</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require 'db.php';
    $stmt = $pdo->query("SELECT * FROM `product`");
    while ($prod = $stmt->fetch()):
    ?>
        <tr>
            <td><?= $prod['id'] ?></td>
            <td><?= $prod['name'] ?></td>
            <td><?= $prod['description'] ?></td>
            <td><?= $prod['price'] ?></td>
            <td><?= $prod['category'] ?></td>
            <td><img src="<?= $prod['photo'] ?>" width="120" height="80"></td>
            <td><a class="btn btn-secondary" href="edit.php?id=<?= $prod['id'] ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?= $prod['id'] ?>">Delete</a></td>
        </tr>
    <?php
    endwhile;
    ?>
    </tbody>
</table>
<form name="sort" method="post" action="sort.php">
    <input name="sortn" placeholder="Name product">
    <input name="sortp" placeholder="Price product">
    <button type="submit" class="btn btn-primary">Sorting</button>
</form>
</div>
</body>
</html>