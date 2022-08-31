<?php
include('config.php');

// Update Data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $variety = $_POST['variety'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

    $result = mysqli_query($mysqli, "UPDATE jamu_products SET merk='$merk', variety='$variety', stock='$stock', price='$price' WHERE id=$id");

    if ($result) {
        Header("Location: index.php");
    } else {
        echo "Data gagal diupdate! :(";
    }
}

// Get Value
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM jamu_products WHERE id=$id");
while ($data = mysqli_fetch_array($result)) {
    $id = $data['id'];
    $merk = $data['merk'];
    $variety = $data['variety'];
    $stock = $data['stock'];
    $price = $data['price'];
}

?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Navbar -->

    <!-- Form Update -->
    <h1>Update Item</h1>
    <form action="update.php" method="post" name="formUpdate">
        <table>
            <input type="hidden" name="id" value=<?php echo $id; ?>>
            <tr>
                <td><label for="merk">Merk</label></td>
                <td><input type="text" id="merk" name="merk" placeholder="Merk" value="<?php echo $merk ?>"></td>
            </tr>
            <tr>
                <td><label for="variety">Variety :</label></td>
                <td>
                    <select name="variety" id="variety">
                    <?php if ($variety == "Beras Kencur") { ?>
                        <option value="Beras Kencur" selected>Beras Kencur</option>
                        <option value="Kunyit Asam">Kunyit Asam</option>
                        <option value="Temulawak">Temulawak</option>
                        <option value="Galian Singset">Galian Singset</option>
                        <option value="Brotowali">Brotowali</option>
                        <option value="Others">Others</option>
                    <?php } elseif ($variety == "Kunyit Asam") { ?>
                        <option value="Beras Kencur">Beras Kencur</option>
                        <option value="Kunyit Asam" selected>Kunyit Asam</option>
                        <option value="Temulawak">Temulawak</option>
                        <option value="Galian Singset">Galian Singset</option>
                        <option value="Brotowali">Brotowali</option>
                        <option value="Others">Others</option>
                    <?php } elseif ($variety == "Temulawak") { ?>
                        <option value="Beras Kencur">Beras Kencur</option>
                        <option value="Kunyit Asam">Kunyit Asam</option>
                        <option value="Temulawak" selected>Temulawak</option>
                        <option value="Galian Singset">Galian Singset</option>
                        <option value="Brotowali">Brotowali</option>
                        <option value="Others">Others</option>
                    <?php } elseif ($variety == "Galian Singset") { ?>
                        <option value="Beras Kencur">Beras Kencur</option>
                        <option value="Kunyit Asam">Kunyit Asam</option>
                        <option value="Temulawak">Temulawak</option>
                        <option value="Galian Singset" selected>Galian Singset</option>
                        <option value="Brotowali">Brotowali</option>
                        <option value="Others">Others</option>
                    <?php } elseif ($variety == "Brotowali") { ?>
                        <option value="Beras Kencur">Beras Kencur</option>
                        <option value="Kunyit Asam">Kunyit Asam</option>
                        <option value="Temulawak">Temulawak</option>
                        <option value="Galian Singset">Galian Singset</option>
                        <option value="Brotowali" selected>Brotowali</option>
                        <option value="Others">Others</option>
                    <?php } elseif ($variety == "Others") { ?>
                        <option value="Beras Kencur">Beras Kencur</option>
                        <option value="Kunyit Asam">Kunyit Asam</option>
                        <option value="Temulawak">Temulawak</option>
                        <option value="Galian Singset">Galian Singset</option>
                        <option value="Brotowali">Brotowali</option>
                        <option value="Others" selected>Others</option>

                    <?php } ?>



                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="stock">Stock</label></td>
                <td><input type="number" min="0" id="stock" name="stock" placeholder="Stock" value="<?php echo $stock ?>"></td>
            </tr>
            <tr>
                <td><label for="price">Price</label></td>
                <td><input type="number" min="0" id="price" name="price" placeholder="Price" value="<?php echo $price ?>"></td>
            </tr>
            <tr>
                <td><button type="submit" name="update" class="btn btn-primary">Update Item</button></td>
            </tr>
            </div>
        </table>
    </form>

    <!-- Form Add -->

</body>


</html>