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
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <title>Forrajeria Lolita</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
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


                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="cierrecaja.php">cierre de caja</a></li>
                                <li><a class="dropdown-item" href="cierrecaja_Anterio.php">cierre de caja anteriores</a></li>

                                <li>
                                    <form action="logout.php" method="POST">
                                        <input type="text" name="msj" id="ejemplo" readonly style="visibility:hidden;">

                                        <input type="submit" class="btn btn-secondary btn-lg btn-block" onclick="salirApp()" value=" Salir Del Sistema">

                                    </form>
                                    <script type="text/javascript">
                                        function salirApp() {
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
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="stockModificar.php">Modificar Stock</a></li>
                                <li><a class="dropdown-item" href="stockCambiarPrecio.php">Modificar Precio</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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
                        <form class="d-flex" role="search" action="app.php" method="POST">
                            <input class="form-control me-2" name="buscar" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                    <div>&nbsp;&nbsp;&nbsp;</div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <?php $us = obtenerUsuario($_SESSION["idUsuario"]);
                        foreach ($us as $u) {
                            echo  $u->usuario . "<div>&nbsp;&nbsp;&nbsp;</div> ";
                            # code...
                        } ?>

                        <a href="ventaPreparacion.php" class="btn btn-success btn-sm">Vender</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="contenido wrapper " id="primera-seccion">
        <div class="container position-relative card">
            <div class="card-header">
                <h3>Venta - Selecionar Articulos</h3>
                <?php appButton() ?>
                <a href="app.php" class="btn btn-info btn-sm" style="float:right;">Cambiar Vista</a>

            </div>
            <div class="card-body">

                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
                <?php
                if (!isset($_POST["buscar"])) {
                    $productos = obtenerProductos();
                } else {
                    $productos = obtenerProductosBuscar($_POST["buscar"]);
                }
                foreach ($productos as $producto) { ?>
                    <div class="box-m">
                        <div class="box-i">
                            <span><?php echo $producto->id_articulo . " - " . $producto->nombre ?></span>
                        </div>
                        <div class="box-c">
                            <span><?php echo "<b>Present:</b> " . $producto->tamanio ?></span>
                            <br />
                            <span><?php echo "<b>Precio $</b> " . $producto->precio_final . "<br><b> Stock:</b> </span>";
                                    if ($producto->cantidad <= $producto->stockMinimo) { ?>
                                    <span style="color:red" ;><b><?php echo $producto->cantidad ?></b></span>
                                <?php
                                    } else {
                                        echo $producto->cantidad ?>
                                <?php
                                    } ?>
                            </span>
                            <br>
                            <?php if ($producto->suelto == 1) {
                                echo "<span style='color:blue' ><b>Unid/Cant. </b> </span> <span> Suelto(" . $producto->id_unidadVenta . ")</span>";
                            } else {
                                echo "<span><b>Unid/Cant. </b> </span> <span>" . $producto->id_unidadVenta . "</span>";
                            } ?>

                        </div>
                        <div class="box-c">
                            <?php
                            $sta = FALSE;
                            foreach ($_SESSION["carrito"] as list($a, $b)) {
                                if ($producto->id_articulo == $a) {
                                    $sta = TRUE;
                                }
                            }
                            if ($sta) { ?>

                                <form action="carritoEliminar.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo ?>">
                                    <span style="width: 100px;" class="btn btn-info btn-sm"><i class="fa fa-check"></i>En el carrito</span>
                                    <input type="hidden" name="flex" value="flex">

                                    <button style="width: 70px;" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Quitar</button>
                                </form>

                            <?php
                            } else { ?>
                                <form action="carritoAgregar.php" method="post">
                                    <input style="width: 85px;" type="text" id="name" name="cant_art" required minlength="1" maxlength="8" size="10">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo ?>">
                                    <input type="hidden" name="flex" value="flex">

                                    <button class="btn btn-success btn-sm" style="width: 85px;">
                                        Agregar
                                    </button>
                                </form>

                            <?php
                            } ?>

                        </div>



                    </div>
                <?php
                } ?>

            </div>
        </div>

        </div>
    </section>

    <br>
    <section id="segunda-seccion">
        <div class=" position-relative card">

            <div class="card-header">
                <h3>Articulos Selecionados</h3>
                <?php appButton() ?>

            </div>

            <div class="card-body">
                <h5 class="card-title">Articulos seleccionados</h5>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Articulo</th>
                            <th scope="col">Presentacion</th>
                            <th scope="col">Tipo Articulo</th>
                            <th scope="col">Precio Fnicial</th>
                            <th scope="col">Unidad Venta</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Sub Total</th>
                            <th scope="col">Eliminar</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $Total = 0;
                        $productos = obtenerProductos();
                        foreach ($productos as $producto) {
                            foreach ($_SESSION["carrito"] as list($a, $b)) {
                                if ($producto->id_articulo == $a) { ?>
                                    <tr>
                                        <th scope="row" align="center"><?php echo $producto->id_articulo ?></th>
                                        <td><?php echo $producto->nombre ?></td>
                                        <td><?php echo $producto->tamanio ?></td>
                                        <td><?php echo $producto->tipoArti ?></td>
                                        <td align="center"><?php echo $producto->precio_final ?></td>
                                        <?php
                                        if ($producto->suelto == 1) {
                                            echo "<td style='color:blue' ><b>Suelto(" . $producto->id_unidadVenta . ")</b></td>";
                                        } else {


                                            echo "<td>" . $producto->id_unidadVenta  . "</td>";
                                        }

                                        ?>
                                        <td align="center"><?php echo  $b ?></td>
                                        <td><?php echo  $producto->precio_final * $b;
                                            $Total = $Total + $producto->precio_final * $b;
                                            ?>
                                        </td>
                                        <td>
                                            <form action="carritoEliminar.php" method="post">
                                                <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo ?>">
                                                <span class="btn btn-info btn-sm"><i class="fa fa-check"></i>&nbsp;En el carrito </span>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Quitar</button>
                                            </form>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                        <tr>
                            <td colspan=8 align="right"></td>
                            <td colspan=2 align="center">Total</td>
                            <th> <?php echo $Total ?></th>
                        </tr>
                    </tbody>
                </table>

                <div class="card-body d-flex justify-content-between align-items-center">

                    <a href="carritoBorrarSession.php" class="btn btn-primary btn-sm">Cancelar</a>
                    <a href="ventaPreparacion.php" class="btn btn-success btn-sm">Realizar Venta</a>
                </div>
            </div>

        </div>
    </section>
    <a href="ventaPreparacion.php" class="btn-flotante">Vender</a>
    <?php include_once('footer.php'); ?>