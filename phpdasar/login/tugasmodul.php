<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
</head>
<body>
<?php 

	function bertanya() {
		echo "Hai, apakah anda bisa menghitung?";
	}

	bertanya();
	print '<br>';

	function menjawab($hitung1, $hitung2) {
		$jumlah = $hitung1 * $hitung2;
		echo "Ya, hasil dari $hitung1 x $hitung2 adalah : $jumlah";
	}

	menjawab(15, 30);
	print '<br><br>';

	function bertanya1() {
		for ($x = 1; $x < 11; $x++){
		echo "Urutkan angka : $x <br> ";
		}
	}

	bertanya1();
	print '<br>';

	function menjawab1($juara) {
		if ($juara = "Juara Menghitung"){
		echo "Selamat kepada Juara Menghitung :";
		}
		else {
			echo "Selamat kepada Juara Menulis";
		}
	}

	menjawab1('Juara Menghitung');
	print'<br>';
	
	function bertanya2($x) {
		while ($x < 4) {
			echo "Juara : $x <br>";
			$x++;
		}
	}

	bertanya2(1);

?>
</body>
</html>