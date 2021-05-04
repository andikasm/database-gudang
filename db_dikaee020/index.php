<?php
session_start();
include 'koneksi.php';
include 'koneksi_email.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Database Gudang ALFAGUSTUS</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link"><?php echo $_SESSION["email"] ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-danger" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<meta charset ="UTF-8">
		<meta http-equiv-"X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tabel Data Produk - ALFAGUSTUS</title>
		<link rel="stylesheet" href="bootstrap.min.css" >
		<style type="text/css">
			body {
				background-image: url("indomaret.jpg");
				background-repeat: repeat;
				background-size: cover;
			}
			.box{
				padding-top: 20px;
				padding-bottom: 30px;
				background-color: #C0C0C0;
				opacity: 0.85;
			}
			th{
				padding-left: 30px;
				padding-right: 30px;
			}
		</style>
	</head>
	<body>
		<div class="container">
		<header class="bg-primary py-5" align="center">
		<font face=georgia>
			<h1>Database Gudang ALFAGUSTUS</h1>
			<h3>Daftar Data Produk Gudang</h3>
		</header>
		<div class="box">
		<font face=arial>
		<p><a href = tambah.php class="btn btn-info"><b>(+) Tambah Data Produk</b></a>
		<table border="3" align="center">
			<thead>
				<th>Kode Produk</th>
				<th>Nama Produk</th>
				<th>Jumlah Box</th>
			</thead>
			<tbody>
				<?php
				include 'koneksi.php';
				$data=mysqli_query($koneksi, "SELECT * FROM data_produk") or die (mysqli_error($koneksi));
				foreach($data as $baris){ ?>
				<tr>
					<td><?php echo $baris['kode_barang'] ?></td>
					<td><?php echo $baris['nama_barang'] ?></td>
					<td><?php echo $baris['jumlah'] ?></td>
					<td>
						<a href="update.php?kode_barang=<?php echo $baris['kode_barang'] ?>" class="btn btn-success">Update</a>
						<a href="delete.php?kode_barang=<?php echo $baris['kode_barang'] ?>" class="btn btn-danger">Delete</a>
					</td>
				<?php } ?>
			</tbody>
		<script src="bootstrap.min.js"></script>
	</body>
</html>	
