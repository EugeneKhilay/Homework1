<html> 
<head> 
<title>Example</title> 
</head> 
<body> 
<?php
	function opWithArray($real = array()) {
		$new_real = array();
		$mult = 1;
		$sum = 0;
		foreach ($real as $key) {
			if ($key > 0) {
				$sum += $key;
				array_push($new_real, $key);
			}
		}


		if ($sum == 0) {
			echo "Членів з позитивними або парними значеннями немає :(<br>";
		}else {
			echo "Сумма = " . $sum . "<br>";
			foreach ($new_real as $key) {
				if ($key % 2 === 0) {
						$mult *= $key;
				}
			}
				
			echo "Добуток парних = " . $mult;
		}
	}
	opWithArray(array(-1, 2, -5, 6 , 15, -5));
?> 
</body> 
</html>