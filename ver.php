<table class="table table-striped table-hover">
    <form action="guardar_stock.php" method="post">    
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
                <th>>Presentacion:</th>
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
                                <option value=<?php echo "'" .$proveedor->id_proveedor  '";?>> <?php echo $proveedor->nombre ."  ---  ".$proveedor->localidad ?> </option>
                            <?php
                            }              
                            ?>
                        </select>
                    </td>
            </tr>
            <tr>
                <th><button class="button is-success">Guardar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </th>
            </tr>
            
        </tbody>
        </form>
</table>            