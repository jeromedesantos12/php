<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan 1</title>
</head>
<body>
	
	<table border="1" cellpadding="10" cellspacing="0">
		<?php 
			for($i = 1; $i <= 3; $i++) {
				echo "<tr>";
				for($j = 1; $j <= 5; $j++) {
					echo "<td>$i,$j</td>";
				}
				echo "</tr>";
			}
		 ?>
	</table>

</body>
</html>