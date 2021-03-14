<?php
include('connection.php');
$id =$_POST['id'];
$jenis = $_POST['jenis'];
$nama = $_POST['nama'];
$size = $_POST['size'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];
?>

<?php
$id = @$_POST['id'];
$jenis = @$_POST['jenis'];
$nama = @$_POST['nama'];
$size = @$_POST['size'];
$harga = @$_POST['harga'];
$alamat = @$_POST['alamat'];

$Query="insert into data_sepatu (id, jenis, nama, size, harga, alamat) value ('$id','$jenis','$nama','$size','$harga','$alamat')";
mysqli_query($koneksi,$Query);
include('bag.php');
?>        
<script>
    alert("Order saved");
</script>

<!-- (id, jenis, nama, size, harga, alamat) -->