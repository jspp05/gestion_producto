<?php

require_once __DIR__ . "/../models/producto.php";

class productoControllers
{
    public function index (){
        $producto = new producto();
        $producto = $producto->getAll();

        require_once __DIR__ . "/../views/producto/index.php";
    }
}