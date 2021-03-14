<?php
include "connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Nike Just Do It. Nike ID</title>
    <link rel="stylesheet" href="bagstyle.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="container">
            <div class="header">
                <div class="navbar">
                    <a href="index.html">
                        <div class="logo"></div>
                    </a>
                    <ul>
                        <li><a href="men.html">Men</a></li>
                        <li><a href="women.html">Women</a></li>
                        <li><a href="kids.html">Kids</a></li>
                        <li><a href="#">Outfit</a></li>
                        <li><a href="#">About Me</a></li>
                    </ul>
                    <input class="button" type="button" value="🔍">
                    <input class="search" type="text" placeholder="Search">
                    <a href="bag.php">
                        <div class="keranjang"></div>
                    </a>
                </div>
                <div class="info">
                    <h6>
                        COVID-19: Information about Nike stores and deliveries.
                        <a href="info.html">View here</a>
                    </h6>
                </div>
            </div>
            <div class="content">
                <div class="h1">Edit</div>
                <div class="left">
                    <form action="update.php" method="POST">
                    <table class="table2">
                        <thead>
<?php

include("connection.php");

// kalau tidak ada id di query string
if(!isset($_GET['id']) ){
    header('Location: bag.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$getdata=mysqli_query($koneksi, "SELECT * FROM data_sepatu WHERE id='$id';");
$a=mysqli_fetch_assoc($getdata);

?>
                            <tr>
                                <td><?php echo '<input type="hidden" name="nama" value="'.$a["nama"].'">'.$a["nama"]?></td>
                                <td><?php echo $a['harga']?>,00</td>
                                <td>id <?php echo '<input type="hidden" name="id" value="'.$a["id"].'">'.$a["id"]?></td>
                            </tr>
                            <tr>
                                <td colspan="3"><?php echo $a['jenis']?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="alamat" type="text" placeholder="Address"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input name="size" value="EU 41.5" type="radio" <?php echo ($a == 'EU 41.5') ? "checked": "" ?>>EU 41.5</td>
                                <td><input name="size" value="EU 42" type="radio" <?php echo ($a == 'EU 42') ? "checked": "" ?>>EU 42</td>
                            </tr>
                            <tr>
                                <td><input name="size" value="EU 42.5" type="radio" <?php echo ($a == 'EU 42.5') ? "checked": "" ?>>EU 42.5</td>
                                <td><input name="size" value="EU 43" type="radio" <?php echo ($a == 'EU 43') ? "checked": "" ?>>EU 43</td>
                            </tr>
                            <tr>
                                <td><input name="size" value="EU 43.5" type="radio" <?php echo ($a == 'EU 43.5') ? "checked": "" ?>>EU 43.5</td>
                                <td><input name="size" value="EU 44" type="radio" <?php echo ($a == 'EU 44') ? "checked": "" ?>>EU 44</td>
                            </tr>
                            <tr>
                                <td><input name="size" value="EU 44.5" type="radio" <?php echo ($a == 'EU 44.5') ? "checked": "" ?>>EU 44.5 </td>
                                <td><input name="size" value="EU 45" type="radio" <?php echo ($a == 'EU 45') ? "checked": "" ?>>EU 45</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Save">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
                <div class="right">
                </div>
            </div>
            <div class="footer">
                <p>@2020 Nike. Inc. All Right Reserved</p>
                <p>Fakhri Ardian Rafi - A11.2019.11848</p>
            </div>
        </div>
    </center>
</body>
</html>