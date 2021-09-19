<?php
include_once ("Controller/Controller_".$controlador.".php");
$objControlador="Controller".ucfirst($controlador);
$controlador = new $objControlador;
$controlador->$accion();
?>