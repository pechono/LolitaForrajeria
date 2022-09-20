
<?php include_once "header.php" ?>
<?php
include_once "funciones.php";
?>
<section class="contenido wrapper ">
<div class="container position-relative card" >
        <div class="card-header ">
        <h2 class="is-size-2">Eliminar Producto</h2>
        <?php productosButton() ?>

        </div>    
    <form action="productosEliminarRegistro.php" method="post">   
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
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            
             
                <input type="text" name="msj" id="msj" readonly style="visibility:hidden;">
                <?php  
                $productos = obtenerProductos();
                foreach ($productos as $producto) 
                {
                    
                    ?>
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
                                    echo "<td>".$producto->id_unidadVenta  ."</td>";
                                    }
                            ?>
                                            
                            <td><?php echo $producto->limites_descuento ?></td>
                            <td><?php echo $producto->cantidad ?></td>
                            <td><?php echo $producto->caducidad ?></td>
                            <td><?php echo $producto->detalles ?></td>
                            <td><script type="text/javascript">
                                            function vT(i)
                                            {
                                                var mensaje;
                                                var opcion = confirm("Desea Eliminar el Articulo");
                                                if (opcion == true) {
                                                    mensaje = i;
                                                } else {
                                                    mensaje = "-1";
                                                }
                                                document.getElementById("msj").value = mensaje;
                                            }
                                </script>  
                                
                             
                                
                                <button class="btn btn-danger btn-sm" onclick="vT(<?php echo $producto->id_articulo; ?>)">

                                    Eliminar
                                </button>  
                                                                                                          
                                                                            
                            
                        </td>
                        <?php 
                } ?>
                                   
                    </tr>
        </tbody>
    </table>
</form> 
</div>
</section>

<?php include_once "footer.php" ?>