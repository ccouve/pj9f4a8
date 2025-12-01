<?php
	
	require 'operacions.php';
	use \PHPUnit\Framework\TestCase;
	
	
	class  operacionsTest extends PHPUnit\Framework\TestCase {
	
		private $operacio_test;
 
		protected function setUp(): void{
			$this->operacio_test = new operacions();
		}
 
		protected function tearDown(): void{
			$this->operacio_test = NULL;
		}
 
		public function testSuma(){
			# Test 1
			$result = $this->operacio_test->suma(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->suma(1.2, 3.4);
			$this->assertEquals(4.6, $result);
			# Test 3
			$result = $this->operacio_test->suma(1.2, -5.4);
			$this->assertEquals(-4.2, $result);			
		}
		
		
		public function testResta(){
			# Test 1
			$result = $this->operacio_test->resta(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->resta(1, 4);
			$this->assertEquals(-3, $result);
			# Test 3
			$result = $this->operacio_test->resta(5, 2);
			$this->assertEquals(3, $result);	
		}
		
		public function testMultiplica(){
			# Test 1
			$result = $this->operacio_test->multiplica(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->multiplica(2, 4);
			$this->assertEquals(8, $result);
			# Test 3
			$result = $this->operacio_test->multiplica(5, -2);
			$this->assertEquals(-10, $result);
			# Test 4
			$result = $this->operacio_test->multiplica(-2, -3);
			$this->assertEquals(6, $result);
		}
		
		public function testDivideix(){
			# Test 1
			$result = $this->operacio_test->divideix(8, 2);
			$this->assertEquals(4, $result);
			# Test 2
			$result = $this->operacio_test->divideix(6, -2);
			$this->assertEquals(-3, $result);
			# Test 3
			$result = $this->operacio_test->divideix(-12, -4);
			$this->assertEquals(3, $result);
		}
		public function testPotencia(){
			# Test 1
			$result = $this->operacio_test->potencia(2, 3);
			$this->assertEquals(8, $result);
			# Test 2
			$result = $this->operacio_test->potencia(2, -1);
			$this->assertEquals(0.5, $result);
			# Test 3
			$result = $this->operacio_test->potencia(-4, -2);
			$this->assertEquals(0.0625, $result);
		}
		
 	}
?>