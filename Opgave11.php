<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Opgave 11</title>
	<style>
		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>

<body>
	<?php
		print("<table>");
			for ($i = 1; $i < 11; $i++) {
				print(
					"<tr>
						<td>" . $i . "</td>
						<td>" . ($i * 5) . "</td>
					</tr>"
				);
			}
		print("</table>");
	?>
</body>

</html>