<?php

/*=============================================
PROMOCIÓN PROPIEDADES CONSTRUCTIVAS

Menos código repetitivo para definir e inicializar una propiedad.
=============================================*/

#ANTES

class MiClase1 {

	public $x;
  	public $y;
  	public $z;

  	public function __construct(
    $x = 1,
    $y = 3,
    $z = 5
  	){

  		$this->x = $x;    
   	 	$this->y = $y; 
    	$this->z = $z;

  	}

  	public function MiFuncion1(){

  		echo '<pre>'; print_r($this->x); echo '</pre>';
  		echo '<pre>'; print_r($this->y); echo '</pre>';
  		echo '<pre>'; print_r($this->z); echo '</pre>';
  	}

}

$variable1 = new MiClase1();
$variable1 -> MiFuncion1();

#AHORA

class MiClase2 {

	public function __construct(
	    public $x = 2,
	    public $y = 4,    
	    public $z = 6,    
	  ) {}

	public function MiFuncion2(){

		echo '<pre>'; print_r($this->x); echo '</pre>';
  		echo '<pre>'; print_r($this->y); echo '</pre>';
  		echo '<pre>'; print_r($this->z); echo '</pre>';

	}

}

$variable2 = new MiClase2();
$variable2 -> MiFuncion2();