<!DOCTYPE html>
<html>
<head>
	<title>operator perbandingan</title>
</head>
<body>
	<<?php 
		$x = 10;
		$y = 20;

		echo "==operator perbandingan==";
		echo "<br>";
		echo "NILAI A adalah 10 dan NILAI B adalah 20";
		echo "<br><br>";
		echo "apakah x sama dengan y :";var_dump($x==$y);
		echo "<br>";
		echo "apakah x lebih besar dari y :";var_dump($x>$y);
		echo "<br>";
		echo "apakah x lebih kecil dari y :";var_dump($x<$y);
		echo "<br>";
		echo "apakah x lebih besar sama dengan y :";var_dump($x>=$y);
		echo "<br>";
		echo "apakah x lebih kecil sama dengan y :";var_dump($x<=$y);
		echo "<br>";
		echo "apakah x tidak sama dengan y :";var_dump($x!=$y);
	 ?>
</body>
</html>