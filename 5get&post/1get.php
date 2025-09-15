<!DOCTYPE html>
<html>
<head>
	<title>Get di PHP</title>
</head>
<body>
	<h1>Get di PHP</h1>
	<form action="1get.php" method="get">
		<input type="text" name="nama" placeholder="Nama">
		<input type="submit" value="Submit">
	</form>
	<?php
	echo $_GET['nama']; 
	?>
</body>
<body>
	
</body>
</html>