<?php

/*=============================================
Match Expression

Las nuevas expresiones match son similares a switch y tienen las siguientes características:

Match es una expresión; esto quiere decir que pueden ser almacenadas como variables o devueltas.
Match soporta expresiones de una línea y no necesitan romper declarar un break.
Match hace comparaciones estrictas.
=============================================*/

#ANTES
switch (8) {
	case '8':
	$result = "Esto es un texto";
	break;
	case 8:
    $result = "Esto es un Numero";
    break;
}

echo '<pre>'; print_r($result); echo '</pre>';

#AHORA
echo match (8) {
	 8 => "Esto es un número",
	'8' => "Esto es un texto"		
};