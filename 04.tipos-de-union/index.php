<?php

/*=============================================
Union Types

En vez de anotaciones en PHPDoc para combinar tipos, puedes usar una declaración de tipo unión nativa que será validada en el momento de ejecución.
=============================================*/

#ANTES

class Numero1 {

	/** @var int|float */
	private $numero1;

	/**
    * @param float|int $number
    */
	public function __construct($numero1) {

		$this->numero1 = $numero1;
		echo '<pre>'; print_r($this->numero1); echo '</pre>';
	}

}

new Numero1("hola"); 

#AHORA
class Numero2 {

	private int|float $numero2;

	 public function __construct(int|float $numero2) {

	 	$this->numero2 = $numero2;
		echo '<pre>'; print_r($this->numero2); echo '</pre>';

	 }

}	

new Numero2(10); 