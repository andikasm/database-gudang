<?php
session_start();
include 'koneksi.php';
include 'koneksi_email.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penambahan Data Produk ALFAGUSTUS</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style type="text/css">
		body {
			background-image: url("indomaret.jpg");
			background-repeat: repeat;
			background-size: cover;
		}
		.box{
            padding-top: 20px;
            padding-bottom: 30px;
			background-color: #ffffff;
			opacity: 0.85;
		}
        .index{
            padding-left: 20px;
        }
	</style>
</head>
<body>
    <div class="container" align="center">
    <font face=georgia>
    <header class="bg-primary py-5">
        <h1>Database Gudang ALFAGUSTUS</h1>
        <h3>Penambahan Data Produk Gudang</h3>
    </header>
        <div class="box">
        <div class="col-md-6">
        <font face=calibri>
        <form action="proses_tambah.php" method="post">
            <label for="kode_barang"><b>Kode Produk</b></label>
        </br>
            <input type="text" class="form-control" maxlength=15 name="kode_barang" required>
            <label for="nama_barang"><b>Nama Produk</b></label>
        </br>  
            <input type="text" class="form-control" name="nama_barang" required>
            <label for="jumlah"><b>Jumlah Box</b></label>
        </br>    
            <input type="number" class="form-control" name="jumlah" required>
            <button class="btn btn-primary" type="submit" name="button">Simpan Data</button>
            <a class="index" href = index.php><b>Kembali</b></a>
        </form>
        </div>
        </div>
    </div>
    <script src="bootstrap.min.js"></script>
</body>
</html>
