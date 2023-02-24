<?php
include_once('view/layouts/header.php');
?>
<?php

$conexion = Database::conectar();

$consulta = "SELECT * FROM actividades";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$actividades = $resultado->fetchAll(PDO::FETCH_OBJ);

?>


<br>
<br>
<div class="card">
    <div class="card-header">
    <i class="fas fa-address-card"></i> REGISTRAR INGRESO COAD
    </div>
    <div class="card-body">

 
    <form action="" method="post" enctype="multipart/form-data">

     <div class="mb-3">
       
     <input type="text" required
         class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="NOMBRE">
       
     </div>

     <div class="mb-3">
       
       <input type="number" required
         class="form-control" name="documento" id="documento" aria-describedby="helpId" placeholder="Nº DOCUMENTO">
       
     </div>

     

     <div class="mb-3">
    

      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="actividad" required>
    
      <option selected disabled>SELECCIONA TU ACTIVIDAD</option>

    <?php foreach($actividades as $actividad): ?>

        <option value="<?php echo $actividad->nombre_actividad ?>"><?php echo $actividad->nombre_actividad ?></option>
    
     <?php endforeach;  ?>



     </select>
      
     <input type="text"
         class="form-control" name="otra" id="" aria-describedby="helpId" placeholder="Otra actividad (opcional)">
       
     </div>

  

     <input name="registrar" id="" class="btn btn-success" type="submit" value="REGISTRAR">

     <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">CANCELAR</a>

    </form>

       
    </div>
   
</div>



<?php
include_once('view/layouts/footer.php');
?>