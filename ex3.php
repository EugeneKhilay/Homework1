<html> 
<head> 
<title>Example</title> 
</head> 
<body> 
<?php
	function opWithArray($real = array()) {
		$mult = 1;
		$count= 0;
		foreach ($real as $key) {
			if ($key < 0) {
				$count ++;
			}
		}
		echo "Кількість від’ємних членів = " . $count . "<br>";
		$a = 2;
		$b = 4;
		for ($a; $a <= $b; $a++) {
			$mult *= $real[$a];
		}
		echo "Добоуток елементів на відрізку [a, b] = " . $mult;
	}
	opWithArray(array(-1, 2, -5, 6 , 15, -5));
?> 
</body> 
</html>