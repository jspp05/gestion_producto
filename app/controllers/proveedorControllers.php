<?php

require_once __DIR__ . "/../models/proveedor.php";

class proveedorControllers
{
    public function index (){
        $proveedor = new proveedor();
        $proveedores = $proveedor->getAll();

        require_once __DIR__ . "/../views/proveedores/index.php";
    }
}

?>