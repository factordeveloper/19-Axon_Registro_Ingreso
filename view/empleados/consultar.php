<?php
include_once('view/layouts/header.php');
?>
<div class="card mt-3">
    <div class="card-header text-center">
        <h5><b><i class="fa-solid fa-user-clock"></i> <?php echo  $empleado->nombre; ?></b></h5>
    </div>
    <div class="card-body">



   <!--<h3>  ID: <?php echo $empleado->id; ?></h3> -->
      
    
     <table class="table table-success table-bordered text-center table-striped">

     
     <tr>
        <td><i class="fa-solid fa-id-card"></i> DOCUMENTO</td>
        <td><h5><?php echo "**********"; ?></h5></td>
     </tr>

     <tr>
        <td><i class="fa-solid fa-clock"></i> FECHA</td>
        <td><h5><?php echo  $empleado->fecha; ?></h5></td>
      </tr>

      <tr>
        <td><i class="fa-solid fa-calendar-days"></i> HORA</td>
        <td><h5><?php echo  $empleado->hora; ?></h5></td>
      </tr>

      <tr>
        <td><i class="fa-solid fa-briefcase"></i> ACTIVIDAD</td>
        <td><h5><?php echo $empleado->actividad; ?></h5></td>
      </tr>

      <tr>
        <td><i class="fa-solid fa-briefcase"></i> OTRA ACTIVIDAD</td>
        <td><h5><?php echo $empleado->otra; ?></h5></td>
      </tr>


     </table>


     <a href="?controlador=empleados&accion=inicio" class="btn btn-primary"><h3><i class="fa-solid fa-circle-left"></i> REGRESAR</h3></a>


       
    </div>
   
</div>

<?php
include_once('view/layouts/footer.php');
?>