<?php

/*=============================================
Comparaciones inteligentes entre “strings” y números 

Antes cuando comparabas el 0 con una cadena de texto devolvía un verdadero, ahora convierte la cadena de texto en número y si no es un valor numérico devuelve falso
=============================================*/


#operador ternario
echo 0 == '0' ? "verdadero" : "falso"; #ANTES True, AHORA False 