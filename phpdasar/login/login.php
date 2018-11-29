<?php 

if( isset($_POST["submit"]) ) {
	if( $_POST["username"] == "admin" && $_POST["password"] == "admin") {

		header("location: admin.php");
		exit;
	}
	else {

		$error = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Login</title>
</head>
<body>
<center>
<br><br>
<h2>Halaman Login</h2>
<br><br>
<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: bold;">Username atau password salah</p>
<?php endif; ?>
<form action="" method="post">
<div class="form-group">
	<label for="username">Username :</label>
		<input type="text" class="form" name="username" id="username"><br><br>
</div>
<div class="form-group">
	<label for="password">Password :</label>
		<input type="password" class="form" name="password" id="password">
</div>
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</body>
</html>