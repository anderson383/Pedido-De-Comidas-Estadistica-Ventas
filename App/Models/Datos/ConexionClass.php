<?php

namespace App\Models\Datos;

use PDO;

//Singleton
class Conexion
{
    private static $host = 'localhost';
    private static $dbName = 'restaurante';
    private static $userName = 'root';
    private static $passwordUser = '';
    private static $conex;

    private function __construct()
    {
        
    }
    public static function conectarBaseDatos(){
        Conexion::$conex = new PDO('mysql:host='.Conexion::$host.';dbname='.Conexion::$dbName,Conexion::$userName,Conexion::$passwordUser);
        Conexion::$conex->exec("SET NAMES 'utf8';");
        return Conexion::$conex;
    }

}
