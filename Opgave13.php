<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Opgave 13</title>
</head>
<body>
	<?php

		print("<table border=\"2\">");

		// Headers
		print("<th>Numbers</th>");

		$testArray[] = 2;
		$testArray[] = 4;
		$testArray[] = 6;
		for($i=0; $i< count($testArray); $i++){
			print("<tr>");
			print("<td>" . $testArray[$i] . "</td>");
			print("</tr>");
		}

		print("</table>");


	?>
</body>
</html>