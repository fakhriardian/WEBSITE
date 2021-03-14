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
                <div class="h1">Bag</div>
                <div class="left">
                    <form action="delete.php" method="GET">
                    <table class="table2">
                        <thead>
<?php
include 'connection.php';
$getdata=mysqli_query($koneksi, "SELECT * FROM data_sepatu");

if( mysqli_num_rows($getdata) < 1 ){
    die("There are no item in your bag");
}

while($a=mysqli_fetch_array($getdata)){
?>
                            <tr>
                                <td><?php echo '<input type="hidden" name="nama" value="'.$a["nama"].'">'.$a["nama"]?></td>
                                <td><?php echo $a['harga']?>,00</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2"><?php echo $a['jenis']?></td>
                            </tr>
                            <tr>
                                <td colspan="2">Size <?php echo $a['size']?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo $a['alamat']?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="edit.php?id=<?php echo $a['id'];?>">Edit</a>&nbsp &nbsp
                                    <a href="delete.php?id=<?php echo $a['id']; ?>">Remove</a>
                                </td>
                            </tr>
                        </tbody>
<?php
}
?>
                    </table>
                    <br><br><br><br><br>
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