<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Opgave 9</title>
</head>
<body>
	<?php

		for ($i = 0; $i < 10; $i++) { 
			print($i);
		}

		print("<br>");
		print("<br>");
		print("<br>");

		$array = ["Hej", "Med", "Dig"];
		foreach ($array as $key => $value) {
			print($key . " : " . $value);
			print("<br>");
		}

		print("<br>");
		print("<br>");
		print("<br>");

		$a = 0;
		while ($a <= 10) {
			print($a);
			$a++;
		}

		print("<br>");
		print("<br>");
		print("<br>");

		$b = 0;
		do {
			print($b);
			$b++;
		} while ($b <= 10);
	?>
</body>
</html>