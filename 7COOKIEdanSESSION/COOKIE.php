<?php
	// ketika button buat di klik
	if (isset($_POST['buat'])) {
		// Nama dari inputan
		$namaKue=$_POST['kue'];
		// membuat cookie
		setcookie('kue', $namaKue, time() + 3600); 

		header("location:COOKIE.php");
	}

	// ketika button hapus di klik
	if (isset($_POST['hapus'])) {
		
		// menghapus cookie
		setcookie('kue', "", time() - 3600); 

		header("location:COOKIE.php");
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>
	<h1>Nanti Cookie muncul di bawah !</h1>
	<?php if (isset($_COOKIE['kue'])) : ?>
		<h4>Sekarang Kta makan kue <?= $_COOKIE['kue']?></h4>
	<?php endif ?>	
	<form method="post" action="">
		<input type="text" name="kue">
		<button type="submit" name="buat">Buat</button>
		<button type="submit" name="hapus">Hapus</button>
	</form>
</body>
</html>