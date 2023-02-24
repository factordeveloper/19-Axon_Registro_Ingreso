<?php

$conexion=mysqli_connect("localhost", "root", "", "registros");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registros</title>
</head>
<body style="background-color:#91cdf6">


<table border=1>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nº Documento</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Actividad</th>
            <th>Otra Actividad</th>
            
        </tr>
    </thead>

    <?php

$sql="SELECT * FROM registros order By id desc";
$result = mysqli_query($conexion, $sql);

while($mostrar=mysqli_fetch_array($result)){
    
    
    
    ?>


    <tbody>

    


        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo "**********" ?></td>                      
            <td><?php echo $mostrar['fecha'] ?></td>
            <td><?php echo $mostrar['hora'] ?></td>
            <td><?php echo $mostrar['actividad'] ?></td>
            <td><?php echo $mostrar['otra'] ?></td>
    
        </tr>
     <?php
      }
     ?>
        


    </tbody>
</table>









    
</body>
</html>




