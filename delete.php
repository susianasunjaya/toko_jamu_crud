<?php

include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM jamu_products WHERE id=$id");
if ($result) {
    header("Location: index.php");
} else {
    echo "Data gagal dihapus!";
}
?>