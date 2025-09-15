<!DOCTYPE html>
<html>
<head>
	<title>Nilai 2</title>
</head>
<body>
	<?php 
		$nilai = 75;
		if ($nilai >= 80) {
			echo "NILAI anda $nilai, anda Lulus";
		} elseif ($nilai >= 60) {
			echo "NILAI anda $nilai, anda Remedial";
		} else {
			echo "NILAI anda $nilai, anda Tidak Lulus";
		}
	 ?>

</body>
</html>