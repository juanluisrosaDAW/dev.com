<?php

/*bool define ( string $identificador , mixed $valor [, bool $case_insensitive = false ] );*/
/*string date (string $formato [, int $fechahora]);*/

$a = $b = "3.1416"; // asignamos a las dos variables la misma cadena de texto
settype($b, "float"); // y cambiamos $b a tipo float
print "\$a vale $a y es de tipo ".gettype($a);
print "<br />";
print "\$b vale $b y es de tipo ".gettype($b);

    
if (isset($a)) { // la variable $a está definida
    unset($a);
} //ahora ya no está definida

print "\$a despues del unset vale $a y es de tipo ".gettype($a);

define ("PI", 3.1416, true);
print "<br />";
print "El valor de PI es ".pi; //El identificador se reconoce tanto por PI como por pi

/*
print "$_SERVER['PHP_SELF'] guión que se está ejecutando actualmente."
print "$_SERVER['SERVER_ADDR'] dirección IP del servidor web."
print "$_SERVER['SERVER_NAME'] nombre del servidor web."
print "$_SERVER['DOCUMENT_ROOT'] directorio raíz bajo el que se ejecuta el guión actual."
print "$_SERVER['REMOTE_ADDR'] dirección IP desde la que el usuario está viendo la página."
print "$_SERVER['REQUEST_METHOD']" 
*/
?>

