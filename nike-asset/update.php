<?php

include("connection.php");

// cek apakah tombol simpan sudah diklik atau blum?
    // ambil data dari formulir
$id = @$_POST['id'];
$size = @$_POST['size'];
$alamat = @$_POST['alamat'];

// buat query update
$getdata = "UPDATE data_sepatu SET size='$size', alamat='$alamat' WHERE id='$id';";
$Query = mysqli_query($koneksi, $getdata);

// apakah query update berhasil?
if($Query) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: bag.php');
} else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
}
?>