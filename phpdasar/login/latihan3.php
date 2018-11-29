<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
	<?php if ( isset($_POST["submit"]) ) : ?>
	<h3>Hallo, <?= $_POST["nama"]; ?> Welcome to My World!</h3>
<?php endif; ?>
<form method="POST">
	Masukan Nama :
	<input type="text" name="nama">
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>