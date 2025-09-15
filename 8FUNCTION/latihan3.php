<?php 

	$pelajar="septi";
	
	function siswa($nama="iyan", $kelas="XI RPL"){
		global $pelajar; //mengambil variable dari luar function
		echo "siswa kelas $kelas yang bernama $pelajar selalu rajin.";
	}

	siswa();

 ?>