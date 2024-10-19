<?php

/*=============================================
Permitir una coma al final de una lista de parámetros
=============================================*/

function MiFuncion(
	$scheme,
    $user,
    $pass,
    $host,
    $port,
    $path,
    $query,
    $fragment,// <-- Ahora esto es permitido!
){}