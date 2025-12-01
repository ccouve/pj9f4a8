<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>EXECUCIÓ DE LA RESTA DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE LA RESTA</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$resultat = $operacio->resta($_GET["op1"],$_GET["op2"]);
			echo "<p>El resultat és igual: $resultat</p>";			
		?>
		<a href="resta.html">Torna a la pàgina anterior</a>
	</body>
</html>
