<?php

/*=============================================
Argumentos nombrados

Ahora PHP 8 permite nombrar los argumentos (parámetros) al momento de su ejecución sin tener que coincidir en el orden.
=============================================*/

function parametros($uno,$dos,$tres){

	return $uno.", ".$dos.", ".$tres;
}

//ANTES

$paramUno = "uno";
$paramDos = "dos";
$paramTres = "tres";

echo parametros($paramUno, $paramDos, $paramTres);

//AHORA

echo parametros(tres:"tres",uno:"uno",dos:"dos");