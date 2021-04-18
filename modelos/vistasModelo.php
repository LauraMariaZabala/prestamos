<?php

//modelo para las vistas
class vistasModelo{

    //Modelo para obtener las vistas de la plantilla

    //función para obtener las vistas, donde protected
    // siginifca que esta protegido y static para usarlo más facílmente 
    protected static function obtener_vistas_modelo($vistas){

        //lista blanca de las palabras que se pueden visualizar en la URL, estas van a estar
        //dentro de un array
        $listaBlanca=[];
        if (in_array($vistas, $listaBlanca)) {
            
            //se hace la comprobación de la vista con esta condición
            if (is_file("./vistas/contenidos/".$vistas."-view.php")) {
                
                $contenido ="./vistas/contenidos/".$vistas."-view.php";
                //si no lo encuentra nos lleva  a  la página 404
            }else{

                $contenido="404";

            }
            //si el usuario se encuentra en el login o en el index principal 
        }elseif ($vistas=="login" || $vistas=="index") {
            $contenido="login";

        }else{
             //si no esta la palabra dentro del array nos llevara a la pag 404
            $contenido="404";
        }

        return $contenido;
    }

}