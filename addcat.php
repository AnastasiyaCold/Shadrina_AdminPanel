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
    <form action="storecat.php" method="post">
        <div class="form-group">
            <label for="name">Name category</label>
            <input type="text" id="namecat" class="form-control" name="namecat">
        </div>
        <input type="submit" class="btn btn-success" value="Add category">
    </form>
</div>
</body>
</html>