<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>operator logika</title>
</head>
<body>
	<?php 
		$a = true;
		$i = false;
		
		echo "== operator logika and ==";
		echo "<br>";
		echo ("a && i :");var_dump($a && $i);
		echo "<br>";
		echo ("i && i :");var_dump($i && $i);
		echo "<br>";
		echo ("a && a :");var_dump($a && $a);
		echo "<br>";
		echo ("i && a :");var_dump($i && $a);
		echo "<br>";
		echo "<br>";

		echo "== operator logika or ==";
		echo "<br>";
		echo ("a || i :");var_dump($a || $i);
		echo "<br>";
		echo ("i || i :");var_dump($i || $i);
		echo "<br>";
		echo ("a || a :");var_dump($a || $a);
		echo "<br>";
		echo ("i || a :");var_dump($i || $a);
		echo "<br>";
		echo "<br>";

		echo "== operator logika negasi ==";
		echo "<br>";
		echo ("negasi a :");var_dump(!$a);
		echo "<br>";
		echo ("negasi i :");var_dump(!$i);
		
	 ?>
</body>
</html>