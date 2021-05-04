<?php
include 'koneksi.php';

$kode_baranglama=$_GET['kode_barang'];
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi, "UPDATE data_produk SET kode_barang='$kode_barang', nama_barang='$nama_barang', jumlah='$jumlah' WHERE kode_barang='$kode_baranglama' ")
or die(mysqli_error($koneksi));

if($query){
	header("Location: index.php");
}else{
	echo "Gagal update data";
}
?>
