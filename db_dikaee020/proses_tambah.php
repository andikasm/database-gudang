<?php
include 'koneksi.php';

$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi,"INSERT INTO data_produk(kode_barang, nama_barang, jumlah) 
VALUES ('$kode_barang','$nama_barang','$jumlah')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: index.php");
}else{
    echo"Gagal Input Data";
}
?>
