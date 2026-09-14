<?php

require_once __DIR__ ."/../../config/Database.php";

class producto{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT
        p.id,
p.nombre,
p.precio,
c.nombre AS categoria,
pr.nombre AS proveedor
FROM producto p 
JOIN proveedores pr ON p.proveedores_id=pr.id
JOIN categoria c ON p.categoria_id=c.id";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getByid($id){
        $sql= "SELECT * FROM producto WHERE id= $id";
        $consulta = $this->connection->query($sql);
        
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }


};
?>