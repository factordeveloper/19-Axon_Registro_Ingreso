<?php
ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registro AXON360</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon_axon.jpg" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

  </head>
  <body class="bg-info">

  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="?controlador=empleados&accion=crear"> <img src="images/axon.png" alt="" width="30"> AXON 360<span class="visually-hidden">(current)</span></a>
          <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio"><i class="fas fa-house"></i> Inicio</a>
          <a class="nav-item nav-link" href="?controlador=empleados&accion=inicio"><i class="fas fa-file-alt"></i> Registros</a>
      </div>
  </nav>


  <div class="container-fluid">
    <div class="row">
      <div class="col-12">