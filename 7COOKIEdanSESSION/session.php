<?php
	session_start();

	// ketika button buat di klik
	if (isset ($_POST['buat'])) {
		// Nama dari inputan
		$namaSession=$_POST['session'];
		// membuat cookie
		$_SESSION['isi']= $namaSession; 

		header("location:session.php");
	}

	// ketika button hapus di klik
	if (isset($_POST['hapus'])) {
		
		// menghapus cookie
		session_unset(); 

		header("location:session.php");
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
	<h1>Nanti session muncul di bawah !</h1>
	<?php if (isset($_SESSION['isi'])) : ?>
		<h4>Isi dari session akan muncul <?= $_SESSION['isi']?></h4>
	<?php endif ?>	
	<form method="post" action="">
		<input type="text" name="session">
		<button type="submit" name="buat">Buat</button>
		<button type="submit" name="hapus">Hapus</button>
	</form>
</body>
</html>