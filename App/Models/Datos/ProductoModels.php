<?php

namespace App\Models\Datos;

use App\Models\Entidades\ProductoEntidad;

require 'ConexionClass.php';
use PDO;
class ProductoModels
{
    private $conex;
    private $sentencia;
    private $stmt;
    public function __construct()
    {
        $this->conex = Conexion::conectarBaseDatos();
    }
    public function insertarProducto(ProductoEntidad $datos){
        $nombreProducto = $datos->getNombreProducto();
        $precioProducto = $datos->getPrecioProducto();
        $this->sentencia = "INSERT INTO `productos`(`nombreProducto`, `precioProducto`, `fechaProducto`) VALUES (?,?,now())";
        $this->stmt = $this->conex->prepare($this->sentencia);
        $this->stmt->bindParam(1,$nombreProducto);
        $this->stmt->bindParam(2,$precioProducto);
        $this->stmt->execute();
        if($this->stmt->rowCount()){
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        } else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        return $respuesta;
    }
    public function consultarGrafica(){
        $this->sentencia = "SELECT fechaProducto,COUNT(*) FROM productos WHERE fechaProducto <= now() GROUP BY fechaProducto ORDER BY fechaProducto ASC LIMIT 11";
        $this->stmt = $this->conex->prepare($this->sentencia);
        $this->stmt->execute();
        $datosEnteros = array();
        while($resultado = $this->stmt->fetch(\PDO::FETCH_ASSOC)){
           // $datos[] = $resultado;
           $datos = array(
                'fechaProducto' => $resultado["fechaProducto"],
                'total' => $resultado["COUNT(*)"]
            );
            $datosEnteros[] = $datos;
        }
        return $datosEnteros;
    }
}