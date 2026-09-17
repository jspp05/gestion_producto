<?php

require_once __DIR__ ."/../models/cliente.php";

class clienteControllers
{
    public function index (){
        $cliente = new cliente();
       

        try{
            $clientes = $cliente->getAll();
        }catch(PDOException){
            echo "No se encontraron clientes";
        }
        
        try{
            $clienteConsultado = $cliente->getByid(1);  
        }catch(PDOException){
            echo "No se encontró el cliente";
        }
        
        require_once __DIR__ . "/../views/clientes/index.php";
    }
}