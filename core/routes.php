<?php

    function cargarControlador($controlador){

        $nombreControlador = ucwords($controlador)."Controler";
        $archivoControlador = "./controllers/".Productos."/controller.".$controlador.".php";
        if(!is_file($archivoControlador)){
            $archivoControlador = "./controllers/".Productos."/controller.".Productos.".php";
        }
        require_once $archivoControlador;
        $control = new $nombreControlador();
        return $control;

    }

    function cargarAccion($controller,$metodo, $id = null){
        $controller = ucwords($controller)."Controler";
        $control = new $controller();
        if(isset($metodo) && method_exists($controller,$metodo)){
            if($id==null){
                $control->$metodo();
            }else{
                $control->$metodo($id);
            }
        }else{
            $control->FuncionPrincipal();
        }

    }

?>