<?php
// incluir el global para cargar todas las configuraciones
include("globals.php");
/*
print '<pre>'; //dar forma
print_r ($_SERVER); // imprimir lo que tiene el server
print '</pre>';

exit; //terminar ejecucion
*/

$view =  new vista();

echo $view -> get_content();
