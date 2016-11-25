<html>
<head>
    <title>Studi Kasus 5.3 Muchamad Abdul Azis</title>
	<style>
		table, td {
			border: 2px solid grey;
		}
		td {
			padding: 3px;
		}
		table#t 	{
			text-align:center;
		}

	</style>
</head>
<body>
	<table id="tabel">
    <?php
	
	$n =5;
	for($j=0;$j<=95;$j++){
		$i=5;
		$i=$i+$j;
		$bil[$j][0]=$i;
		for($a=0;$a<=998;$a++){
			if ($a<=0){
				$n=$i;
			}
			$n=$n+5;
			$bil[$j][$a+1]=$n;
		}
	}
	"</table>";
    ?>
</body>
</html>