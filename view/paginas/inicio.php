<?php
include_once('view/layouts/header.php');
?>
<div class="p-5 bg-light">
    <div class="container">
        
        <?php
        include 'view/reloj/reloj.php';
        ?>
        
        <h1 class="display-3"> Ingreso COAD </h1>
        <h1><i class="fas fa-file-medical"></i> <i class="fas fa-medkit"></i> <i class="fas fa-ambulance"></i> </h1>
        <p class="lead"><i class="fas fa-sign-in-alt"></i> Bienvenido/a</p>
        <hr class="my-2">
        <p></p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="?controlador=empleados&accion=crear" role="button"><i class="fas fa-pencil-alt"></i> REGISTRAR INGRESO</a>
        </p>
    </div>
</div>
<?php
include_once('view/layouts/footer.php');
?>

