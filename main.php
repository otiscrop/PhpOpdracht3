<!DOCTYPE html>
<html>
<body style="text-align: center;">
<?php

	$line = 10;
	$star = "*";
	
	for($i = 0; $i < $line; $i++){
		for($j = 0; $j < $i; $j++){
			echo $star;
		}
		echo "<br>";
	}
?>
</body>
</html>