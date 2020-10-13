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
    <a href="index.php">Home page</a>
</nav>
<div class="container" style="max-width: 30rem;">
    <?php
    require 'db.php';
    $stmt = $pdo->query('SELECT * FROM `article`')->fetch();
    ?>
    <h1><?= $stmt['namear'] ?></h1>
    <p><?= $stmt['descriptionar'] ?></p>
    <p class="card-text"><small class="text-muted">Date 01.10.2020 Time 8:50</small></p>
    <h5>Comments</h5>
    <p></p>
</div>
<div class="container" style="max-width: 30rem;">
    <form action="storecomm.php" method="post">
        <div class="form-group">
            <input type="text" id="name" class="form-control" name="name">
        </div>
        <input type="submit" class="btn btn-success" value="Add comment">
    </form>
</div>
</body>
</html>