<?php
include('config.php');

$result = mysqli_query($mysqli, "SELECT * FROM jamu_products ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Toko Jamu</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Toko Jamu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Navbar -->

    <!-- Table -->

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Merk</th>
                <th scope="col">Variety</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $data['merk'] . "</td>";
                echo "<td>" . $data['variety'] . "</td>";
                echo "<td>" . $data['stock'] . "</td>";
                echo "<td>" . $data['price'] . "</td>";
                echo "<td><a href='update.php?id=$data[id]'>Update</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
            }
            ?>

        </tbody>
    </table>
    <!-- Table -->



</body>

</html>