<?php
include_once('view/layouts/header.php');
?>
<br>

<div class="card" > 

<div class="card" >
    <div class="card-header"  >
    <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button"><i class="fas fa-plus-square"></i> Generar Registro</a>
    <a name="" id="" class="btn btn-danger" href="reportePDF.php" role="button"><i class="fas fa-file-pdf"></i> Exportar PDF</a>
    </div>
    
    <div class="card-body" class="container" >
        
           <div class="row">
            <div class="col-12">
                
            <table class="table table-bordered table-striped text-center table-responsive" id="tabla">
        
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nº Documento</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Actividad</th>
                <th>Otra Actividad</th>
                <th><i class="fa-solid fa-circle-info"></i></th> 
            </tr>
        </thead>
        <tbody class="table-info">
    
        <?php
    
        foreach ($empleados as $empleado): ?>
    
    
            <tr>
                <td><h6 class="mt-3"><?php echo $empleado->id;?></h6></td>
                <td><h6 class="mt-3"><?php echo $empleado->nombre;?></h6></td>
                <td><h6 class="mt-3"><?php echo "*********";?></h6></td>                       
                <td><h6 class="mt-3"><?php echo $empleado->fecha;?></h6></td>
                <td><h6 class="mt-3"><?php echo $empleado->hora;?></h6></td>
                <td><h6 class="mt-3"><?php echo $empleado->actividad;?></h6></td>
                <td><h6 class="mt-3"><?php echo $empleado->otra;?></h6></td>
                <td><a href="?controlador=empleados&accion=consultar&id=<?php echo $empleado->id;?>" class="btn btn-info"><h4><i class="fa-solid fa-circle-info"></i></h4></a></td>
             
    
                        
            </tr>
            
            <?php endforeach ?>
    
    
        </tbody>
    </table>


            </div>
           </div>
        

    
        
    </div>
    
    
</div>

</div>

<script>
    var myTable = document.querySelector("#tabla");
var dataTable = new DataTable(tabla);
</script>

<?php
include_once('view/layouts/footer.php');
?>


