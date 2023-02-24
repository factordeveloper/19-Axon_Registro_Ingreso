<?php

class Database{

    private static $conexion=NULL;

    public static function conectar(){

        if(!isset(self::$conexion)){

            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

            self::$conexion= new PDO('mysql:host=localhost;dbname=registro_actividades', 'root', '', $opcionesPDO);
            //echo "conexion exitosa";
        }
        return self::$conexion;

    }



}











