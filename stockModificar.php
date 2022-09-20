<?php include_once "header.php";
$productos = obtenerProductos();
            ?>


<section class="contenido wrapper ">
    <div class="container position-relative card" >
                    <div class="card-header ">
                    <h3>Modificar Stock</h3>
                    <?php stockButton() ?>
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
                                <th scope="col">Unidad cant</th>
                                <th scope="col">Limite Descuento</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Detalles</th>
                                <th scope="col" colspam="3" style="width:50px">cantidad</th>
                            </tr>
                        </thead>
                        <?php foreach ($productos as $producto) 
                        { ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $producto->id_articulo ?></th>
                                    <td><?php echo $producto->nombre ?></td>
                                    <td><?php echo $producto->tamanio ?></td>

                                    <td><?php echo $producto->tipoArti ?></td>
                                    <td><?php echo $producto->precio_inicial ?></td>
                                    <td><?php echo $producto->precio_final ?></td>
                                    <td><?php echo $producto->id_unidadVenta ?></td>
                                    
                                    <td><?php echo $producto->limites_descuento ?></td>
                                    <?php
                                    if ($producto->cantidad<=$producto->stockMinimo) {?>
                                        <td style="color:red"; ><b><?php echo $producto->cantidad ?></b></td>
                                    <?php
                                    } 
                                    else 
                                    { ?>
                                        <td ><?php echo $producto->cantidad ?></td>
                                    <?php
                                    } ?>
                                    <td><?php echo $producto->detalles ?></td>
                                
                                   
                                        <form action="stockMcant.php" method="post">
                                                <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo?>">
                                                <td> <input type="text" name ="stock" size="9px"></td>
                                                <td><button class="btn btn-success btn-sm">Modifocar Stock</button></td>
                                                
                                        </form> 
                                  
                                                   
                                 
                                </tr>
                             </tbody> 
                        <?php } ?>
                    </table>
            
            </div>
    
</section>

<?php           
include_once "footer.php"; ?>