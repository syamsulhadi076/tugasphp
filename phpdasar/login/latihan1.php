<?php 

$mahasiswa = [

	[
		"nrp" => "030500018",
		"nama" => "Samsul Hadi",
		"email" => "syamsulhadi076@gmail.com",
		"jurusan" => "Manajemen Bisnis",
		"gambar" => "samsul.jpg"

	],
	[

		"nrp" => "030400021",
		"nama" => "Muhammad Raihan",
		"email" => "muhammadraihan21@gmail.com",
		"jurusan" => "Tekhnik Informatika",
		"gambar" => "raihan.jpg"
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ( $mahasiswa as $mhs ) : ?>
		<li>
			<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs ["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>	&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
		</li>
<?php endforeach; ?>
</ul>
</body>
</html>