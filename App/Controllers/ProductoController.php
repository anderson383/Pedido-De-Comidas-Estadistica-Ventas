<?php

namespace App\Controllers;
require_once '../Models/Datos/ProductoModels.php';
require_once '../Models/Entidades/ProductoEntidad.php';
use App\Models\Datos\ProductoModels;
use App\Models\Entidades\ProductoEntidad;

class ProductoController{

    private $productoModels;
    private $productoEntidad;

    public function __construct()
    {
        $this->productoModels = new ProductoModels();
        $this->productoEntidad = new ProductoEntidad();
    }
    public function insertarProducto($datos){
        $this->productoEntidad->setNombreProducto($datos['txtNombre']);
        $this->productoEntidad->setPrecioProducto($datos['txtPrecio']);
        return $respuesta = $this->productoModels->insertarProducto($this->productoEntidad);
    }
    public function consultarGrafica(){
        return $respuesta = $this->productoModels->consultarGrafica();
    }


}

$producto = new ProductoController();
switch ($_POST['accion']) {
    case 'insertar':
        echo \json_encode($producto->insertarProducto($_POST));
        break;
    case 'consutar':
        echo \json_encode($producto->consultarGrafica());
        break;
    default:
        # code...
        break;
}

