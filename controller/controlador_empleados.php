<?php
ob_start();
?>

<?php



Database::conectar();


class ControladorEmpleados{

    public function inicio(){

        
        $empleados=Empleado::consultar();

        

        //echo '<script> alert("INGRESO REGISTRADO CORRECTAMENTE")</script>';
       // echo '<script> swal("¡GRACIAS!", "TU INGRESO HA SIDO REGISTRADO", "success")</script>';
       
        include_once("view/empleados/inicio.php");

    }

    public function crear(){

        if($_POST){
            //print_r ($_POST);
            date_default_timezone_set('America/Bogota');
            $nombre=$_POST['nombre'];
            $documento=$_POST['documento'];
        

            $fecha=date("Y-m-d");
            $hora=date("H:i:s");
            $actividad=$_POST['actividad'];
            $otra=$_POST['otra'];
            
            Empleado::crear($nombre, $documento, $fecha, $hora, $actividad, $otra );
            
           //  header("Location:./?controlador=paginas&accion=inicio");
            
            
          // echo '<script> alert("REGISTRO COMPLETADO, YA PUEDES CONTINUAR")</script>';
           echo '<script> swal("¡GRACIAS!", "TU INGRESO HA SIDO REGISTRADO", "success")</script>';

 

        }


        
        include_once("view/empleados/crear.php");
        

    }


    public function consultar(){

       

        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $documento=$_POST['documento'];
            $fecha=date("Y-m-d");
            $hora=date("H:i:s");
            $actividad=$_POST['actividad'];
            

            Empleado::consultar($id, $nombre, $documento, $fecha, $hora, $actividad);
            header("Location:./?controlador=empleados&accion=inicio");
        }

        $id=$_GET['id'];

        $empleado=Empleado::buscar($id);

    

        include_once("view/empleados/consultar.php");

    }

  

        







}


?>

<?php
ob_end_flush();
?>