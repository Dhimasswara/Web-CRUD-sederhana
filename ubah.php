<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$namaproduk = mysqli_real_escape_string($mysqli, $_POST['namaproduk']);
	$keterangan = mysqli_real_escape_string($mysqli, $_POST['keterangan']);
	$harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
	$jumlah = mysqli_real_escape_string($mysqli, $_POST['jumlah']);
	
	// checking empty fields
	if(empty($namaproduk) || empty($keterangan) || empty($harga) || empty($jumlah)) {
				
		if(empty($namaproduk)) {
			echo "<font color='red'>Nama Produk belum di isi.</font><br/>";
		}
		
		if(empty($keterangan)) {
			echo "<font color='red'>Keterangan belum di isi.</font><br/>";
		}
		
		if(empty($harga)) {
			echo "<font color='red'>Harga belum di isi</font><br/>";
		}
		
		if(empty($jumlah)) {
			echo "<font color='red'>Jumlah belum di isi.</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		
	} else {	
	
		$result = mysqli_query($mysqli, "UPDATE produk SET namaproduk='$namaproduk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id=$id");
		
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$namaproduk = $res['namaproduk'];
	$keterangan = $res['keterangan'];
	$harga = $res['harga'];
	$jumlah = $res['jumlah'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		.container {
			margin-top: 20px;
		}

		.but {
			margin-top: 10px;
		}
	</style>
</head>

<body>

	<div class="container">
	<a href="index.php" class="btn btn-secondary">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="ubah.php">
		<table border="0">
			<tr> 
				<td>Nama Produk</td>
				<td><input type="text" name="namaproduk" value="<?php echo $namaproduk;?>"></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $keterangan;?>"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value="<?php echo $jumlah;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" class="btn btn-dark btn-sm but"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>
