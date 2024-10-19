<?php 

/*=============================================
OPERADOR NULLSAFE

Antes para comprobar que una propiedad de un objeto o de un método no devuelve NULL hacíamos condición tras condición. Ahora con el operador NullSafe si encuentra en cualquiera de las propiedades el valor Null anula la ejecución de toda la cadena.
=============================================*/


$objeto =(object) array(

	"propiedad1a" =>(object) [

		"propiedad2a" =>(object) [

			"propiedad3a" => "valor1a",
			"propiedad3b" => "valor1b"
		],

		"propiedad2b" =>(object) [

			"propiedad3a" => null,
			"propiedad3b" => null
		]

	],
 
    "propiedad1b" => null

);

#ANTES
$variable = null;

if($objeto->propiedad1a !== null){

	if($objeto->propiedad1a->propiedad2a !== null){

		if($objeto->propiedad1a->propiedad2a->propiedad3a !== null){

			$variable = $objeto->propiedad1a->propiedad2a->propiedad3a;

		}

	}

}

echo '<pre>'; print_r($variable); echo '</pre>';

#AHORA
$variable = $objeto?->propiedad1b?->propiedad2a?->propiedad3a;
echo '<pre>'; var_dump($variable); echo '</pre>';
