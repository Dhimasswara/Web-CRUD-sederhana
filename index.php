<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Halaman Utama</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>

		@font-face {
			font-family: SignikaRegular;
			src: url('../fonts/Signika-Regular.ttf')
		}

		body { 
			font-family: SignikaRegular, sans-serif !important; 
		}


		table tr td {
			text-align: center;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		
		table {
  			border-spacing: 30px;
		}

		.tombol {
			margin-top: 20px;
		}
		h1 {
			font-family: SignikaBold;
			width: fit-content;
			margin: 20px auto !important;
		}

		.salam {
			background-color: #F3F4F7;
			border-radius: 10px;
			text-align: center;

			margin: 30px auto;
			padding: 10px;
			width: 70%;
		}
	</style>

</head>

<body>

<div class="container">


<h1>Aplikasi CRUD sederhana</h1>

		<div class="salam">
			Halo! Ini adalah aplikasi web CRUD sederhana yang saya dengan menggunakan bootstrap sederhana dan PHP. <br>
			Aplikasi web ini saya buat untuk memenuhi tugas pada tes seleksi Bootcamp Pijarcamp. <br>

		</div>

<div class="tombol">
<a href="tambah.html" class="btn btn-secondary">Add New Data</a><br/><br/>
</div>
	<table class="table" width='100%'>

	<thead class="thead-dark">
				<tr>
					<th scope="col">Nama Produk</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Harga</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
	<?php 
 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['namaproduk']."</td>";
		echo "<td>".$res['keterangan']."</td>";
		echo "<td>"."Rp. " .number_format($res['harga'],0,',','.')."</td>";	
		echo "<td>".$res['jumlah']."</td>";
		echo "<td><a href=\"ubah.php?id=$res[id]\" class='btn btn-dark btn-sm'>Ubah</a> | <a href=\"hapus.php?id=$res[id]\" onClick=\"return confirm('Kamu yakin untuk menghapusnya?')\" class='btn btn-dark btn-sm'>Hapus</a></td>";		
	}
	?>
	</table>

</div>
</body>
</html>
