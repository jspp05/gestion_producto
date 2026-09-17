<?php

require_once __DIR__ . "/../models/proveedor.php";

class proveedorControllers
{
    public function index (){
        $proveedor = new proveedor();
        

        try{
            $proveedores = $proveedor->getAll();
        }catch(PDOException){
            echo "No se encontraron proveedores";
        }

        try{
            $proveedorConsultado = $proveedor->getByid(1);
        }catch(PDOException){
            echo "No se encontró el proveedor";
        }

        require_once __DIR__ . "/../views/proveedores/index.php";
    }
}

?>