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
    <a href="pagetwo.php" class="btn btn-success">List product</a>
    <table class="table table-success">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'db.php';
        $n = $_POST['sortn'];
        $p = $_POST['sortp'];
        $stmt = $pdo->query("SELECT * FROM product WHERE `name` LIKE '%".$n."%' OR `price` LIKE '%".$p."%'");
        while ($row = $stmt ->fetch())
        {
            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['description'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['category'].'</td>';
            echo '<td><img src="'.$row['photo'].'" width="120" height="80"></td>';
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>