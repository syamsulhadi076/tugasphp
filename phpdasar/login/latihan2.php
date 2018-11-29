<?php 

if ( !isset($_GET["nama"]) || 
	 !isset($_GET["nrp"]) ||
	 !isset($_GET["email"]) ||
	 !isset($_GET["jurusan"]) ||
	 !isset($_GET["gambar"])) {

	header("location: latihan1.php");
	exit;

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	<center>
		<img src="img/<?= $_GET["gambar"]; ?>" width="20%">
		<p><?= $_GET["nama"]; ?></p>
		<p><?= $_GET["nrp"]; ?></p>
		<p><?= $_GET["email"]; ?></p>
		<p><?= $_GET["jurusan"]; ?></p>
		<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
	</center>
</body>
</html>