<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>EXECUCIÓ DE LA MULTIPLICACIÓ DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE LA MULTIPLICACIÓ</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$resultat = $operacio->multiplica($_GET["op1"],$_GET["op2"]);
			echo "<p>El resultat és igual: $resultat</p>";	;			
		?>
		<a href="multiplicacio.html">Torna a la pàgina anterior</a>
	</body>
</html>
