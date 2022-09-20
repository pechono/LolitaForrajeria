
<?php include_once "header.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<section class="contenido wrapper ">
<div class="container position-relative card" >
    <div class="card-header ">
    
        <h2 >Productos existentes</h2>
        <?php productosButton() ?>

          
  
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) 
                { ?>
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
                        <?php 
                } ?>
                    </tr>
        </tbody>
    </table>
</div>
</section>
<?php include_once "footer.php" ?>