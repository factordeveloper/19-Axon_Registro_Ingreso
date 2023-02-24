<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj</title>
    <link rel="stylesheet" href="view/reloj/reloj.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;432&family=Zen+Antique&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap">
        <div class="widget">
            <div class="fecha">
                <p id="diaSemana" class="diaSemana" ></p>
                <p id="dia" class="dia"></p>
                <p>de</p>
                <p id="mes" class="mes"></p>
                <p>del</p>
                <p id="year" class="year"></p>

            </div>

               <div class="reloj"> 
                   <p id="horas" class="horas"></p>
                   <p>:</p>
                   <p id="minutos" class="minutos"></p>
                   <p>:</p>
                   <div class="caja-segundos">
                       <p id="ampm" class="ampm"></p>
                       <p id="segundos" class="segundos"></p>

                   </div>

               </div>

        </div>



    </div>
    <script src="view/reloj/reloj.js"></script>
    
</body>
</html>

