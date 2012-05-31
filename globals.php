<?php
session_start(); // si no se llama las variables globales no toman funcion
//siempre hay q llamar session_start() si quiero accesar variables globales

//$_ --> todas las variables reservadas de php empiezan con $_
$_SESSION['user'] = ''; //--> crear variable glbal user
define("ROOT", $_SERVER["DOCUMENT_ROOT"]); // 

include(ROOT."/model/class.conexion.php");// conexion a la db
include(ROOT."/view/class.view.php");
include(ROOT."/view/class.table.php");
error_reporting(E_ALL); // todos los errores y warnings
ini_set('display_errors', '1'); // si hay un error tirelo a pantalla... si no quiero verlo en pantalla quitar esta linea
