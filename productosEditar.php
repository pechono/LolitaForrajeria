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


  <title>Forrajeria Lolita</title>
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
               <a class="nav-link" href="pedido.php">Pedido</a>
          </li>
          
        </ul>
        <div class="container-fluid">
            <form class="d-flex" role="search" action="productosEditar.php" method="POST">
                  <input class="form-control me-2" name="buscar" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
      </div>
        <div>&nbsp;&nbsp;&nbsp;</div>
        <div class="card-body d-flex justify-content-between align-items-center">
                                     <?php $us=obtenerUsuario($_SESSION["idUsuario"]);
                                          foreach ($us as $u) 
                                          {
                                            echo  $u->usuario ."<div>&nbsp;&nbsp;&nbsp;</div> ";
                                            # code...
                                          }?>
                            
            <a href="ventaPreparacion.php" class="btn btn-success btn-sm">Vender</a>
					</div>
      </div>
    </div>
  </nav>
</header>
<?php
include_once "funciones.php";
if(!isset($_POST["buscar"]))
      {
         $productos = obtenerProductos();
      }else
      {
        $productos =obtenerProductosBuscar($_POST["buscar"]);
      }
?>
<section class="contenido wrapper ">
  <div class="container position-relative card" >
        <div class="card-header">
        <h2 class="is-size-2">Editar Producto</h2>
        <a class="btn btn-success btn-sm" href="productoAgregar.php">Nuevo&nbsp;</a>
        <a class="btn btn-secondary btn-sm" href="productosEditar.php">Editar&nbsp;</a>
        <a class="btn btn-danger btn-sm" href="productosEliminar.php">Eliminar&nbsp;</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
            <th scope="col">id</th>
			<th scope="col">Articulo</th>
            <th scope="col">Presentacion</th>
			<th scope="col">Tipo Articulo</th>
			<th scope="col">Precio Inicial</th>
			<th scope="col">Precio Final</th>
			<th scope="col"> unidad cant</th>
			<th scope="col">Limite Descuento</th>
			<th scope="col">Stock</th>
			<th scope="col">caducidad</th>
            <th scope="col">Detalles</th>
			<th scope="col" colspam="4" style="width:50px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                    <th scope="row"><?php echo $producto->id_articulo ?></th>
			<td><?php echo $producto->nombre ?></td>
            <td><?php echo $producto->tamanio ?></td>
			<td><?php echo $producto->tipoArti ?></td>
			<td><?php echo $producto->precio_inicial ?></td>
			<td><?php echo $producto->precio_final ?></td>
            <?php
                    if($producto->suelto==1){
                      echo "<td style='color:blue' ><b>Suelto(".$producto->id_unidadVenta.")</b></td>";
                    }else{
                      echo "<td>".$producto->id_unidadVenta ." </td>";
                    }
            ?>
			<td><?php echo $producto->limites_descuento ?></td>
			<td><?php echo $producto->cantidad ?></td>
            <td><?php echo $producto->caducidad ?></td>
			<td><?php echo $producto->detalles ?></td>

                            <form action="productoEditarRegistro.php" method="post">
                                <input type="hidden" name="id_articulo" value="<?php echo $producto->id_articulo ?>">
                                
                                <td><button class="btn btn-success btn-sm" >
                                    Editar
                                </button>
                                </td>
                            </form>
                       
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "footer.php" ?>