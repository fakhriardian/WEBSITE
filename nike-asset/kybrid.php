<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Just Do It. Nike ID</title>
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
                <div class="gridkybrid1"></div>
                <div class="gridkybrid2"></div>
                <div class="gridkybrid3"></div>
                <div class="gridkybrid4"></div>
                <div class="gridfreakleft">
                    <p>Basketball Shoe</p>
                    <h1>Kybrid S2 EP</h1>
                    <p>Rp 1,979,000</p>
                    <table class="table1" cellpadding="10">
                        <form action="save_data.php" method="POST">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                    <?php
                                    include 'connection.php';
                                    $getdata=mysqli_query($koneksi, "SELECT * FROM data_sepatu");
                                    $a=mysqli_num_rows($getdata);
                                    echo '<input type="hidden" name="id" value="'.$a++.'">';
                                    ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <select name="jenis">
                                        <option value="">Choose type of shoe</option>
                                        <option value="Basketball Shoe">Basketball Shoe</option>
                                        </select>
                                    </th>
                                </tr>
                                    <th colspan="2">
                                        <select name="nama">
                                        <option value="">Choose Shoe</option>
                                        <option value="Kybrid S2 EP">Kybrid S2 EP</option>
                                        </select>
                                    </th>
                                <tr>
                                <tr>
                                    <th colspan="2">
                                        <select name="harga">
                                        <option value="">Price</option>
                                        <option value="Rp 1,979,000">Rp 1,979,000</option>
                                        </select>
                                    </th>
                                </tr>
                                    <th colspan="2">
                                        <input name="alamat" type="text" placeholder="Address">
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="2">Select Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name="size" value="EU 41.5" type="radio">EU 41.5</td>
                                    <td><input name="size" value="EU 42" type="radio">EU 42</td>
                                </tr>
                                <tr>
                                    <td><input name="size" value="EU 42.5" type="radio">EU 42.5</td>
                                    <td><input name="size" value="EU 43" type="radio">EU 43</td>
                                </tr>
                                <tr>
                                    <td><input name="size" value="EU 43.5" type="radio">EU 43.5</td>
                                    <td><input name="size" value="EU 44" type="radio">EU 44</td>
                                </tr>
                                <tr>
                                    <td><input name="size" value="EU 44.5" type="radio">EU 44.5</td>
                                    <td><input name="size" value="EU 45" type="radio">EU 45</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Add to Bag"></td>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                    <div class="p"><p>
                    The Kybrid S2 combines the best of the Kyrie 4, 5 and 6 into one sensational, 
                    boundary-pushing basketball shoe. It provides a secure, lightweight fit with 
                    an overlay that locks you in when you lace up. A Kyrie-ready Zoom Air unit and 
                    traction that wraps up the sides help fast, quick-cutting players stay responsive 
                    and turn on their edges. This EP version uses an extra-durable outsole that's ideal 
                    for outdoor courts.
                    </p></div>
                    <br><br><br><br>
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