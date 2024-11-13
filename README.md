<center><h1>Ejemplos de Gramática en PHP 8</h1></center>

<center><h3>Manual de PHP Online</h3></center>
                

<center> <strong>¿Tienes alguna pregunta?</strong>
<p>Presentado por Karol Calvache. <abbr title="correo electrónico">EMAIL:</abbr> karfanci@outlook.com</p>
</center>

<h4>Argumentos Nombrados</h4>

`Xampp` : <http://localhost/01.argumentos-nombrados/index.php>

Código de Referencia,

    <?php
    
    /*=============================================
    Argumentos nombrados
    Ahora PHP 8 permite nombrar los argumentos (parámetros) al momento de su ejecución sin tener que coincidir en el orden.
    =============================================*/
    
    function parametros($uno,$dos,$tres){
        return $uno.", ".$dos.", ".$tres;
    }
    
    //CON PHP 7
    
    $paramUno = "uno";
    $paramDos = "dos";
    $paramTres = "tres";
    
    echo parametros($paramUno, $paramDos, $paramTres);
    
    //CON PHP 8
    
    echo parametros(tres:"tres",uno:"uno",dos:"dos");
    

<h4>Comentarios con #</h4>

`Xampp` : <http://localhost/02.Atributos/index.php>

Código de Referencia,

    <?php
    
    /*=============================================
    ATRIBUTOS
    
    En vez de anotaciones en PHPDoc, puedes usar metadatos estructurados con el sintax nativo de PHP.
    =============================================*/
    
    class MiClase{
    
    /**
    * Esto es una anotación en PHPDoc
    */
    
    #Esto es una anotación com metadato estructurado
    
    public function MiFuncion(){}
    
    }
    

<h4>Promoción de propiedades constructivas</h4>

`Xampp` : <http://localhost/03.promocion-propiedades-constructivas/index.php>

Código de Referencia,

    <?php
    
    /*=============================================
    PROMOCIÓN PROPIEDADES CONSTRUCTIVAS
    
    Menos código repetitivo para definir e inicializar una propiedad.
    =============================================*/
    
    #CON PHP 7
    
    class MiClase1 {
    public $x;
    public $y;
    public $z;
    
    public function __construct( $x = 1, $y = 3, $z = 5){
        $this->x = $x;    
        $this->y = $y; 
            $this->z = $z;}
    
    public function MiFuncion1(){
        echo '<pre>'; print_r($this->x); echo '</pre>';
        echo '<pre>'; print_r($this->y); echo '</pre>';
        echo '<pre>'; print_r($this->z); echo '</pre>';}}
    
    $variable1 = new MiClase1();
    $variable1 -> MiFuncion1();
    
    #CON PHP 8
    
    class MiClase2 {
    
    public function __construct( public $x = 2, public $y = 4, public $z = 6, ) {}
    
    public function MiFuncion2(){
        echo '<pre>'; print_r($this->x); echo '</pre>';
        echo '<pre>'; print_r($this->y); echo '</pre>';
        echo '<pre>'; print_r($this->z); echo '</pre>';}}
    
    $variable2 = new MiClase2();
    $variable2 -> MiFuncion2();
    

<h4>Tipos de Unión</h4>

`Xampp` : <http://localhost/04.tipos-de-union/index.php>

Código de Referencia,

    <?php
    
    /*=============================================
    Union Types
    
    En vez de anotaciones en PHPDoc para combinar tipos, puedes usar una declaración de tipo unión nativa que será validada en el momento de ejecución.
    =============================================*/
    
    
    #CON PHP 7
    
    class Numero1 {
    
    /**@var int|float */
    
           private $numero1;
    
    /**
           * @param float|int $number
           */
           
           public function __construct($numero1){
    
        $this->numero1 = $numero1;
        echo '<pre>'; print_r($this->numero1); echo '</pre>';}}
    
    new Numero1("hola"); 
    
    
    #CON PHP 8
    
    class Numero2 {
    
    private int|float $numero2;
    
    public function __construct(int|float $numero2) {
    
        $this->numero2 = $numero2;
        echo '<pre>'; print_r($this->numero2); echo '</pre>'; }}    
    
    new Numero2(10); 
    

<h4>Expresiones Match</h4>

`Xampp` : <http://localhost/05.expresiones-match/index.php>

Código de Referencia,

    <?php
    
    /*=============================================
    Match Expression
    
    Las nuevas expresiones match son similares a switch y tienen las siguientes características:
    
    Match es una expresión; esto quiere decir que pueden ser almacenadas como variables o devueltas.
    Match soporta expresiones de una línea y no necesitan romper declarar un break.
    Match hace comparaciones estrictas.
    =============================================*/
    
    #CON PHP 7
    
    switch (8) {
        case '8':
        $result = "Esto es un texto";
        break;
        case 8:
        $result = "Esto es un Numero";
        break;
    }
    
    echo '<pre>'; print_r($result); echo '</pre>';
    
    #CON PHP 8
    
    echo match (8) {
         8 => "Esto es un número",
        '8' => "Esto es un texto"       
    };
    

<h4>Operador Nullsafe</h4>

`Xampp` : <http://localhost/06.nullsafe-operator/index.php>

Código de Referencia,

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
    
    
    #CON PHP 7
    
    $variable = null;
    
    if($objeto->propiedad1a !== null){
    
    if($objeto->propiedad1a->propiedad2a !== null){
    
        if($objeto->propiedad1a->propiedad2a->propiedad3a !== null){
    
            $variable = $objeto->propiedad1a->propiedad2a->propiedad3a;
    
            }
    
        }
    
    }
    
    echo '<pre>'; print_r($variable); echo '</pre>';
    
    
    #CON PHP 8
    
    $variable = $objeto?->propiedad1b?->propiedad2a?->propiedad3a;
    
    echo '<pre>'; var_dump($variable); echo '</pre>';
    

<h4>Comparaciones Inteligentes</h4>

`Xampp` : <http://localhost/07.comparaciones-inteligentes/index.php>

Código de Referencia,

    <?php
    
    /*=============================================
    Comparaciones inteligentes entre “strings” y números 
    
    Antes cuando comparabas el 0 con una cadena de texto devolvía un verdadero, ahora convierte la cadena de texto en número y si no es un valor numérico devuelve falso
    =============================================*/
    
    
    #operador ternario
    echo 0 == '0' ? "verdadero" : "falso"; 
    
    #CON PHP 7 True, CON PHP 8 False 
    

<h4>Última Coma</h4>

`Xampp` : <http://localhost/08.ultima-coma/index.php>

Código de Referencia,

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
        $fragment, // <-- Ahora esto es permitido!
    ){}
    

<h4>Expression Throw</h4>

`Xampp` : <http://localhost/09.expresion-throw/index.php>

Código de Referencia,

    <?php
    
    /*=============================================
    Ahora el throw en lugar de una declaración, se considera una expresión y se puede usar en más casos.
    =============================================*/
    
    #CON PHP 7
    
    function checkNum($number) {
      if($number>1) {
        throw new Exception("El valor debe ser menor a 1");
      }
      return true;
    }
    
    checkNum(1);
    
    #CON PHP 8
    
    $array = [];
    
    $value = !empty($array)? reset($array): throw new Exception("Está vacía la matriz");
    echo '<pre>'; print_r($value); echo '</pre>';
    

<h4>Compilador JIT</h4>

`Xampp` : <http://localhost/10.compilador-JIT/php.ini>

Código de Referencia,

    
    #Una de las principales novedades de PHP 8 es el compilador JIT (Just in Time), que permite compilar partes del código sobre la marcha, en tiempo de ejecución.
    #El compilador JIT podrá habilitarse en el archivo php.ini, permitirá almacenar el código nativo de los ficheros PHP en un apartado adicional de la memoria compartida OPcache de esta manera:
    
    #Enabling JIT in php.ini
    opcache.enable=1
    opcache.jit_buffer_size=100M
    opcache.jit=tracing
    
