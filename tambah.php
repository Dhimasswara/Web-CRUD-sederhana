<html>
<head>
	<title>Tambah Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		.fon{
			margin-top:20px;
		}
		.war {
			margin-top:20px;
		}
	</style>
</head>

<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$namaproduk = mysqli_real_escape_string($mysqli, $_POST['namaproduk']);
	$keterangan = mysqli_real_escape_string($mysqli, $_POST['keterangan']);
	$harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
	$jumlah = mysqli_real_escape_string($mysqli, $_POST['jumlah']);
		

	if(empty($namaproduk) || empty($keterangan) || empty($harga) || empty($jumlah)) {
				
		if(empty($namaproduk)) {
			echo "<div class='container war'><font color='red'>Nama Produk belum di isi.</font><br/></div>";
		}
		
		if(empty($keterangan)) {
			echo "<div class='container'><font color='red'>Keterangan belum di isi.</font><br/></div>";
		}
		
		if(empty($harga)) {
			echo "<div class='container'><font color='red'>Harga belum di isi.</font><br/></div>";
		}
		
		if(empty($jumlah)) {
			echo "<div class='container'><font color='red'>Jumlah belum di isi.</font><br/></div>";
		}

	
		echo "<div class='container'><br/><a href='javascript:self.history.back();' class='btn btn-dark'>Kembali</a></div>";
	} else { 

			
		
		$result = mysqli_query($mysqli, "INSERT INTO produk(namaproduk,keterangan,harga,jumlah) VALUES('$namaproduk','$keterangan','$harga','$jumlah')");
		
		

		

		echo "<div class='container fon'><font color='green'>Data Berhasil ditambahkan.</div>";
		echo "<br/><div class='container'><a href='index.php' class='btn btn-secondary'>Lihat Hasil</a></div>";
	}
}
?>
</body>
</html>
