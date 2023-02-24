<?php

class Empleado{

    public $id;
    public $nombre;
    public $documento;
    public $fecha;
    public $hora;
    public $actividad;
    public $otra;

    public function __construct($id, $nombre, $documento, $fecha, $hora, $actividad, $otra){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->documento=$documento;
        $this->fecha=$fecha;
        $this->hora=$hora;
        $this->actividad=$actividad;
        $this->otra=$otra;
    }


    public static function crear($nombre, $documento, $fecha, $hora, $actividad, $otra){

        $conexionBD=Database::conectar();

        date_default_timezone_set('America/Bogota');
        $fecha=date("Y-m-d");
        $hora=date("H:i:s");

        
        $sql=$conexionBD->prepare("INSERT INTO registros(nombre, documento, fecha, hora, actividad, otra)
                                  VALUES(?, ?, ?, ?, ?, ?)");

        $sql ->execute(array($nombre, $documento, $fecha, $hora, $actividad, $otra));  


    }

   
    public static function buscar($id){
        $conexionBD=Database::conectar();

        $sql=$conexionBD->prepare("SELECT * FROM registros WHERE id =?");
        $sql->execute(array($id));
        $empleado=$sql->fetch();
        return new Empleado($empleado['id'], $empleado['nombre'], $empleado['documento'], $empleado['fecha'], $empleado['hora'], $empleado['actividad'], $empleado['otra']);

         
    }

    public static function consultar(){
        $listaRegistros=[];
        $conexionBD=Database::conectar();
        $sql = $conexionBD->query("SELECT * FROM registros order By id desc");

        foreach($sql->fetchAll() as $empleado){

            $listaRegistros[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['documento'], $empleado['fecha'], $empleado['hora'], $empleado['actividad'], $empleado['otra']);

        }

        return $listaRegistros;


    }

   


    

   
    

}



?>