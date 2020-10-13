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
    <a href="pagef.php" class="btn btn-success">List article</a>
    <table class="table table-success">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'db.php';
        $search = $_POST['search'];
        $stmt = $pdo->query("SELECT `id`, `namear`, `descriptionar` FROM article WHERE `namear` LIKE '%".$search."%'");
        while ($row = $stmt ->fetch())
        {
            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['namear'].'</td>';
            echo '<td>'.$row['descriptionar'].'</td>';
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>