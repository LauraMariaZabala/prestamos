<?php

require_once "./config/APP.php";
require_once "./controladores/vistasControlador.php";

//vamos a instanciar el controlador vistas

$plantilla = new vistasControlador();
$plantilla->obtener_plantilla_controlador();