<html>
<head>
    <title>Studi Kasus 5.4 Muchamad Abdul Azis</title>
	<style>
		table, td {
			border: 2px solid grey;
		}
		td {
			padding: 3px;
		}
		table#tabel	{
			text-align:center;
		}

	</style>
</head>
<body>
<table>


	<?php
	for ($x = 5; $x <= 100; $x++){
		echo '<tr>';
		for($y = $x; $y <= $x+4995; $y = $y + 5){
			echo "<td/>$y</td>";
		}
		echo '</tr>';
	};
	?>
</body>
</html>