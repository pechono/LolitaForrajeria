
<?php include_once "header.php";
      include_once "funciones.php";
if($_POST["stock"]==1){
    $active = filter_input(INPUT_POST, 'proActive', FILTER_VALIDATE_BOOLEAN);
    if (!isset($_POST["unidad"]) ||!isset($_POST["presentacion"]) ||!isset($_POST["nombre"]) || !isset($_POST["categoria"]) || !isset($_POST["precioinicial"])|| !isset($_POST["preciofinal"]) || !isset($_POST["descuento"])|| !isset($_POST["unidadcantidad"])|| !isset($_POST["detalles"])|| !isset($_POST["caducidad"])) 
    {
        
        exit("Faltan datos");
    }
    if (!isset($_POST['proActive'])) 
    {
    $active = 0;
    }    
    $nombre=$_POST["nombre"]; 
    $tipo=$_POST["categoria"]; 

    $precioi=$_POST["precioinicial"];
    $preciof=$_POST["preciofinal"];
    $limite=$_POST["descuento"];
    $unidac=$_POST["unidadcantidad"];
    echo $unidac;
    $caducidad=$_POST["caducidad"];
    $detalles=$_POST["detalles"];
    $presentacion=$_POST["presentacion"];
    $unidad=$_POST["unidad"];

?>


<section class="contenido wrapper ">
<div class="row justify-content-md-center"">
  <div class="col-4"><div class="container position-relative card" >
        
           
        <div class="card-header ">
        <h2 class="is-size-2">Nuevo producto</h2>
        <a class="btn btn-success btn-sm" href="productoAgregar.php">Nuevo&nbsp;</a>
        <a class="btn btn-secondary btn-sm" href="productosEditar.php">Editar&nbsp;</a>
        <a class="btn btn-danger btn-sm" href="productosEliminar.php">Eliminar&nbsp;</a>
        </div>  
          
          <form action="guardar_producto.php" method="post">
            
           
       
           
         <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Descripcion</th>
                        </tr>
                    </thead>  
                        <tr>
                            <th scope="col">Articulo</th>
                        </tr>
                        <tr>
                            <td><?php echo $nombre ?></td>
                        </tr>
                        <tr>
                            <th>Presentacion:</th>
                        </tr>
                        <tr>
                        <?php
                            $uni = unidadMedida();
                            foreach ($uni as $c) { 
                                if($unidad==$c->id_unidad){
                                    $tam=$presentacion   ." - ".  $c->umedida;
                                }
                        
                         } ?>
                            <td><?php echo $tam ?></td>
                        </tr>
                        <tr>
                            <th>Categoria:</th>
                        </tr>
                        <tr>
                        <?php 
                            $catg = categoria();
                            foreach ($catg as $categoria_art) { 
                                if($categoria_art->id_tipoArt==$tipo)
                                {
                                    $tp=$categoria_art->tipoArti;
                                }
                            }
                          ?>
                            <td><?php echo $tp ?></td>
                        </tr>
                        <tr>
                            <th>Precio Inicial:</th>
                        </tr>
                        <tr>
                            <td><?php echo "$" .$precioi ?></td>
                        </tr>
                        <tr>
                            <th>Precio Final:</th>
                        </tr>
                        <tr>
                            <td><?php echo "$" .$preciof ?></td>
                        </tr>
                        <tr>
                            <th>Se Vende Por:</th>
                        </tr>
                        <tr>
                        <?php
                            $cnt = cantidad();
                            foreach ($cnt as $cant) { 
                                if($unidac==$cant->id){
                                    $udc=$cant->unidadVenta;
                                } 
                            }
                                                        ?>
                            <td><?php echo $udc ?></td>
                        </tr>
                        <tr>
                            <th>Descuento Aplicable:</th>
                        </tr>
                        <tr>
                            <td><?php echo $limite ?></td>
                        </tr>
                        <tr>
                            <th>Caducidad:</th>
                        </tr>
                        <tr>
                            <td><?php echo $caducidad ?></td>
                        </tr>
                        <tr>
                            <th>Detalles del Producto</th>
                        </tr>
                        <tr>
                            <td><?php echo $detalles ?></td>
                        </tr>
                    </tbody> 
                </table>
            </form>
        
    </div></div>
  <div class="col-4">
    <div class="container position-relative card" >
        <div class="card-header">
            <h2 class="is-size-2">Cargar al inventario</h2>
            <table class="table table-striped table-hover">
                <form action="guardar_stock.php" method="post">    
                <input type="hidden" name="nombre" value="<?php echo $nombre?>">
                <input type="hidden" name="categoria" value="<?php echo $tipo?>">
                <input type="hidden" name="precioinicial" value="<?php echo $precioi?>">
                <input type="hidden" name="preciofinal" value="<?php echo $preciof?>">
                <input type="hidden" name="descuento" value="<?php echo $limite?>">
                <input type="hidden" name="unidadcantidad" value="<?php echo $unidac?>">
                <input type="hidden" name="caducidad" value="<?php echo $caducidad?>">
                <input type="hidden" name="detalles"value="<?php echo $detalles?>">
                <input type="hidden" name="presentacion" value="<?php echo $presentacion?>">
                <input type="hidden" name="unidad" value="<?php echo $unidad?>">
                <input type="hidden" name="active" value="<?php echo $active?>">
    <thead>
            <tr>
            <th scope="col">Descripcion</th>
            </tr>
        </thead>  
            <tr>
                <th scope="col">Articulo</th>
            </tr>
            <tr>
                <td> 
                    <input size="25" required id="cantidad"  type="text" placeholder="Cantidad" name="cantidad">
                </td>
            </tr>
            <tr>
                <th>Presentacion:</th>
            </tr>
            <tr>
                <td><input size="25" required id="cantidad"  type="text" placeholder="Stock Minimo" name="minimo">
                <input  type="hidden" value="<?php echo $id_art ?> " name="id_art">
                </td>
            </tr>
            <tr>
                <th>Categoria:</th>
            </tr>
            <tr>
                <td>
                    <select  id="color" placeholder="Proveedor" name="proveedor" size="1">
                        <option value="0">ingresar un nuevo Proveedor</option>
                        <?php
                            include_once "funciones.php";
                            $proveedores = obtenerproveedor();
                            foreach ($proveedores as $proveedor) 
                            {?>
                                <option value=<?php echo "'" .$proveedor->id_proveedor  ."'";?>> <?php echo $proveedor->nombre ."  ---  ".$proveedor->localidad ?> </option>
                            <?php
                            }              
                            ?>
                        </select>
                    </td>
            </tr>
            <tr>
                <th>
                    <a href="productos.php" class="btn btn-primary btn-sm">Volver</a>
                    <button class="btn btn-success btn-sm">Guardar</button>
                    
                </th>
            </tr>
            
        </tbody>
        </form>
</table>            
                </div>
            </div>
        </div>
    </div>
</section>     
    <?php 
} 
include_once "footer.php" ?>