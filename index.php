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
<form name="form" method="post" action="db.php">
    Login:<br/>
    <input name="login" type="text" size="25" maxlength="30" value=""/><br/>
    Password:<br/>
    <input name="password" type="password" size="25" maxlength="30" value=""/><br/>
    <input type="submit" name="enter" value="Log in">
</form>
<div class="container">
    <table class="table table-success">
        <caption>Categories</caption>
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
            </tr>
        <?php
        endwhile;
        ?>
        </tbody>
</div>
<div class="container">
<table class="table table-success">
    <caption>Products</caption>
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
        </tr>
    <?php
    endwhile;
    ?>
    </tbody>
</table>
</div>
<div class="container">
    <div class="card-deck">
        <?php
        require 'db.php';
        $stmt = $pdo->query('SELECT * FROM `article`')->fetch();
        ?>
        <div class="card border-success" style="max-width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $stmt['namear'] ?></h5>
                <p class="card-text"><?= $stmt['descriptionar'] ?></p>
                <a href="comm.php" class="btn btn-success">Read</a>
            </div>
        </div>
    </div>
    <caption>Articles</caption>
</div>
</body>
</html>
