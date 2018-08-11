<?php
require'../vendor/autoload.php';
require_once './PropiedadesController.php';





$accion  = $_REQUEST["Accion"];


switch ($accion) {
    case "SliderPropiedades":
        
        PropiedadesController::GetPorpertiesProjectSlider();
        
        break;
      case "SliderArriendos":
      PropiedadesController::getProyectosArriendoSlider();

        break;
      case "SliderVentas":
      PropiedadesController::getProyectosVentaSlider();

        break;
      case "":


        break;
      case "":


        break;
      case "":


        break;
    
    

    default:
        break;
}



