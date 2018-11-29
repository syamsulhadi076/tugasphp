<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 1</title>
</head>
<body>
	<center>
	<table border="1" cellpadding="3" cellspacing="0">
		<br>
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>

		
			<th>
			<?php  
				$baris = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15");
				$a = 1;
				$b = "Baris";
				foreach ($baris as $key => $value) {
					echo "Kolom $a $b $value <br>";
				}
			?>
			</th>

			<th>
				<?php 
				$baris = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15");
				$a = 2;
				$b = "Baris";
				foreach ($baris as $key => $value) {
					echo "Kolom $a $b $value <br>";
				}
				?>
			</th>
			<th>
				<?php 
				$baris = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15");
				$a = 3;
				$b = "Baris";
				foreach ($baris as $key => $value) {
					echo "Kolom $a $b $value <br>";
				}
				?>
			</th>
			<th>
				<?php 
				$baris = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15");
				$a = 4;
				$b = "Baris";
				foreach ($baris as $key => $value) {
					echo "Kolom $a $b $value <br>";
				}
				?>
			</th>
			<th>
				<?php 
				$baris = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15");
				$a = 5;
				$b = "Baris";
				foreach ($baris as $key => $value) {
					echo "Kolom $a $b $value <br>";
				}
				?>
			</th>

	</table>
</center>

<center><a href="latihan2b.php"><button>Next</button></a></center>
</body>
</html>