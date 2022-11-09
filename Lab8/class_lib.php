<?php
		//Lab 4.2
		class Factorial {  
      protected $numero; 
		  public $i;
		  protected $factorial;
 
		  function __construct($num,$i,$f) {  
			    $this->numero = $num;  
			    $this->i = $i;
			    $this->factorial = $f;
		    } 
 
		  function calc_factorial() {  
			  while ($this->i <= $this->numero) {
				    $this->factorial = $this->i*$this->factorial;
		        $this->i = $this->i+1;
			    }
				return $this->factorial;
		}
	}


  //Lab 4.3
  class Mayor {  
		protected $num; 
		protected $mayor;
 
		function __construct($n,$m) {  
			$this->num = $n;
			$this->mayor = $m;
		} 
 
		function mostrar_mayor() {  
			 foreach ($this->num as $indice => $numero) {
				if ($numero == $this->mayor) {
					echo ("El número mayor en el arreglo es $numero y esta en la casilla $indice");
				}
			}
		} 
	}

  //Lab 4.5

  class Matriz { 
		protected $long;  
		
		function __construct($l) {  
			$this->long = $l;  
		} 
 
		function generar_matriz() {  
			for ($fila=1; $fila <= $this->long; $fila++) {
				for ($columna=1; $columna <= $this->long; $columna++) {
					if ($fila==$columna) {
						echo $matrix= 1; 
					}
					else {
						echo $matrix= 0;
					}
				}
					echo "<br>";
			} 
		} 
 
	}
?>