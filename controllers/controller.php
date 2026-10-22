<?php
class PaginasController{
    public function enlacesPaginasController(){
        if((isset($_GET["accion"]))){
            $enlacesController=$_GET["accion"];
        }
        else{
            $enlacesController="inicio.php";
        }
        $respuesta=enlacesPagina::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }

    public function getTemplateController(){
        include "views/template.php";
    }
}
