<?php
class enlacesPagina{
    public static function enlacesPaginasModel($enlacesModel){
        if($enlacesModel=="nosotros"||
        $enlacesModel=="servicios"||
        $enlacesModel=="contactanos"||
        $enlacesModel=="inicio"){
            $modulo="views/".$enlacesModel.".php";
        }
        else {
            $modulo="views/inicio.php";
        }
        return $modulo;

    }
}
?>