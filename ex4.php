<html> 
<head> 
<title>Example</title> 
</head> 
<body> 
<style type="text/css">
	table {
		border: 2px solid black;
	}
	td {
		text-align: center;
		display: block;
		width: 25px;
		height: 25px;
		border-bottom: 1px solid red;
		border-right: 1px solid red;
	}
	td:last-child {
		border-right: none;
	}
	tr:last-child td {
		border-bottom: none;
	}

</style>
<?php
	function createTable($x, $y) {
		$cols = rand(1, $x);
		$rows = rand(1, $y);
		echo "cols = " . $cols . "<br>";
		echo "rows = " . $rows;
		echo "<table><caption>Таблица умножения " . $cols . "х" . $rows . "</caption>";
		for ($i = 1; $i <= $cols; $i++) {
			echo "<tr>";
			for ($n = 1; $n <= $rows; $n++) {
				echo "<td>" . $i * $n . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	createTable(10, 10);
?> 
</body> 
</html>