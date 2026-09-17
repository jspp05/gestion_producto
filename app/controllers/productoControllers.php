<?php

require_once __DIR__ . "/../models/producto.php";

class productoControllers
{
    public function index (){
        $producto = new producto();
      
        try{
            $productos = $producto->getAll();
        }catch(PDOException){
            echo "No se encontraron productos";
        }

        try{
            $productoConsultado = $producto->getByid(1);
        }catch(PDOException){
            echo "No se encontró el producto";
        }

        require_once __DIR__ . "/../views/producto/index.php";
    }

}