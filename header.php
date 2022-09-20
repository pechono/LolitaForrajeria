<?php include_once "funciones.php"; 
      include_once "botones.php";
if (!isset($_SESSION["idUsuario"])) {
   echo !isset($_SESSION["idUsuario"]);
   exit("Primero debe ingresar al sisteman<br><a href='index.php'>regresar al inicio</a>");
 } ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/styles.css" rel="stylesheet" type="text/css" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


  <title>Document</title>
</head>
<body>
  <header >
  <nav class="navbar navbar-expand-lg bg-light >
    <div class= "container-fluid">
      <a class="navbar-brand" href="#">
        <img alt="" src="img/lolita.png" style="max-height: 40px" />
        Forrajeria Lolita
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Venta</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="app.php">Venta</a></li>
              <li><a class="dropdown-item" href="appSuelto.php">Venta Sueto</a></li>

              <li><a class="dropdown-item" href="CuentaCorriente.php">Pagar Cuenta Corriente</a></li>
              <li><a class="dropdown-item" href="cuentaCorrienteEstadoGeneral.php">Estado De Cuenta</a></li>
              <li><a class="dropdown-item" href="cuentaCorrienteMovimientos.php">Movimiento En Cuenta</a></li>

             
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="cierrecaja.php">cierre de caja</a></li>
              <li><a class="dropdown-item" href="cierrecaja_Anterio.php">cierre de caja anteriores</a></li>

              <li>
              <form action="logout.php" method="POST">
                  <input type="text" name="msj" id="ejemplo" readonly style="visibility:hidden;">
               
                  <input type="submit" class="btn btn-secondary btn-lg btn-block" onclick="salirApp()"  value=" Salir Del Sistema">
                 
               </form>
               <script type="text/javascript">

                  function salirApp()
                      {
                      var mensaje;
                      var opcion = confirm("Desea Abandonar el Sistema");
                      if (opcion == true) {
                          mensaje = "1";
                    } else {
                        mensaje = "0";
                    }
                    document.getElementById("ejemplo").value = mensaje;
                  }
                </script>
              
              
              
              </li>
              
            </ul>
          </li>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Articulos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="productos.php">Lista Articulos</a></li>
              <li><a class="dropdown-item" href="productoAgregar.php">Cargar Articulos</a></li>
              <li><a class="dropdown-item" href="productosEditar.php">Modificar Articulo</a></li>
              <li><a class="dropdown-item" href="productosEliminar.php">Eliminar Articulo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="stockModificar.php">Modificar Stock</a></li>
              <li><a class="dropdown-item" href="stockCambiarPrecio.php">Modificar Precio</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="suelto.php">Sueltos</a></li>



            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cliente</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="clienteCargar.php">Cargar Cliente</a></li>
              <li><a class="dropdown-item" href="clienteModificar.php">Modificar Cliente</a></li>
              <li><a class="dropdown-item" href="clienteEliminar.php">Eliminar Cliente</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Proveedor</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="proveedorCargar.php">Cargar Proveedor</a></li>
              <li><a class="dropdown-item" href="proveedorModificar.php">Modificar Proveedor</a></li>
              <li><a class="dropdown-item" href="proveedorEliminar.php">Eliminar Proveedor</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categoria</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="categoriaCargar.php">Ingresar Categoria</a></li>
              <li><a class="dropdown-item" href="categoriaModificar.php">Modificiar Categoria/a></li>
              <li><a class="dropdown-item" href="categoriaEliminar.php">Eliminar Categoria</a></li>
            </ul>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="informes.php">Informes</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="pedido.php">Realizar Pedido</a>
          </li>
          
        </ul>
        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="card-body d-flex justify-content-between align-items-center">
                                     <?php $us=obtenerUsuario($_SESSION["idUsuario"]);
                                          foreach ($us as $u) 
                                          {
                                            echo "". $u->apellido .", ". $u->nombre ."   turno".$_SESSION["turno"];
                                            # code...
                                          }?>
                            
            <a href="ventaPreparacion.php" class="btn btn-success btn-sm">Realizar Venta</a>
					</div>
      </div>
    </div>
  </nav>
</header>

