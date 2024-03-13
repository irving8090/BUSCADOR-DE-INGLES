<?php
#index, es la puerta de entrada a la aplicación
#require() requerido
#include() incluir

require_once "controlador/plantilla.controlador.php";


//crear una instancia
$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();

    