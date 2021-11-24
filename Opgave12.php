<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Opgave 12</title>
</head>
<body>
	<?php
		print("<table border=\"2\">");

		for ($row=1; $row < 11; $row++) { 
			print("<tr>");
			for ($i=1; $i < 11; $i++) {
				print("<td>" . ( $row * $i ) . "</td>");
			}
			print("</tr>");
		}

		print("</table>");
	?>
</body>
</html>