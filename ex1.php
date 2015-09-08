<html> 
<head> 
<title>Example</title> 
</head> 
<body> 
<?php
	function createMenu($menu = array()) {
		echo "<ul>";
		foreach ($menu as $key => $value) {
			echo "<li><a href=" . $value . ">" . $key . "</a></li>";
		}
		echo "</ul>";
	}
	createMenu(array("Home" => "ex1.php", "About" => "about.php", "Contact" => "contact.php"));
?> 
</body> 
</html>