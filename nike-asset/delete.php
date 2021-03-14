<?php
include("connection.php");
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM data_sepatu WHERE id='$id';");

header("Location:bag.php");
?>