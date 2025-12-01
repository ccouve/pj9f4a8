<?php
	class operacions{				
		public function suma($op1,$op2){
			$resultat = $op1 + $op2;
			return $resultat;
		}
		
		public function resta($op1,$op2){
			$resultat = $op1 - $op2;
			return $resultat;
		}
		
		public function multiplica($op1,$op2){
			$resultat = $op1 * $op2;
			return $resultat;
		}
		
		public function divideix($op1,$op2){
			$resultat = $op1 / $op2;
			return $resultat;
		}
		public function potencia($op1,$op2){
			$resultat = $op1**$op2;
			return $resultat;
		}
	}
?>
