<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>EXECUCIÓ DE LA POTENCIACIÓ DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE LA POTENCIACIÓ</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$resultat = $operacio->potencia($_GET["op1"],$_GET["op2"]);
			echo "<p>El resultat és igual: $resultat</p>";	;			
		?>
		<a href="multiplicacio.html">Torna a la pàgina anterior</a>
	</body>
</html>
