<?php
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
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

    <!-- Form Add -->
    <h1>ADD ITEM</h1>
    <form action="add.php" method="post" name="formAdd">
        <table>
            <tr>
                <td><label for="merk">Merk</label></td>
                <td><input type="text" id="merk" name="merk" placeholder="Merk"></td>
            </tr>
            <tr>
                <td><label for="variety">Variety :</label></td>
                <td>

                    <select name="variety" id="variety">
                        <option value="Beras Kencur">Beras Kencur</option>
                        <option value="Kunyit Asam">Kunyit Asam</option>
                        <option value="Temulawak">Temulawak</option>
                        <option value="Galian Singset">Galian Singset</option>
                        <option value="Brotowali">Brotowali</option>
                        <option value="Others">Others</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="stock">Stock</label></td>
                <td><input type="number" min="0" id="stock" name="stock" placeholder="Stock"></td>
            </tr>
            <tr>
                <td><label for="price">Price</label></td>
                <td><input type="number" min="0" id="price" name="price" placeholder="Price"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" class="btn btn-primary">Add Item</button></td>
            </tr>
            </div>
        </table>
    </form>

    <!-- Form Add -->

</body>
<?php
if (isset($_POST['submit'])) {
    $merk = $_POST['merk'];
    $variety = $_POST['variety'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

    $result = mysqli_query($mysqli, "INSERT INTO jamu_products(merk,variety,stock,price) VALUES('$merk','$variety',$stock,$price)");

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Data gagal ditambahkan.";
    }
}

?>

</html>