<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>EXECUCIÓ DE LA SUMA DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE LA SUMA</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$resultat = $operacio->suma($_GET["op1"],$_GET["op2"]);
			echo "<p>El resultat és igual: $resultat</p>";				
		?>
		<a href="suma.html">Torna a la pàgina anterior</a>
	</body>
</html>
