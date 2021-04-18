<?php

//traemos el modelo requiriendolo una sola vez
require_once"./modelos/vistasModelo.php";

//controlador vistas y heredamos del modelo de vistas
class vistasControlador extends vistasModelo  {

    //controlador para obtener la plantilla, "todos los controladores son publicos"

    public function obtener_plantilla_controlador(){
        return require_once "./vistas/plantilla.php";

    }

    //controlador para obtener las vistas

     public function obtener_vistas_controlador(){

        //se pone views porque en el archivo htaccess se configuró en la línea 3
        if (isset($_GET['views'])) {
           
            //explode es una funcion de php divide un string por medio de un parametro en este caso "/"
            $ruta=explode("/",$_GET['views']);     
            //respuesta si exite la vista o no. --- la vista viene en la variable ruta en el indice 0
            $respuesta=vistasModelo::obtener_vistas_modelo($ruta[0]);
        }else{

            //si no viene nada en la URL nos va a llevar al login
            $respuesta="login";

        }
        return $respuesta;

     }
  
}
