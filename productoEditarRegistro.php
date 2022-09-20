<?php include_once "header.php";
$i='false';
if (isset($_POST["id_articulo"])) 
{
    $id_art=$_POST["id_articulo"];

    $prod=obtenerProductos();
    foreach($prod as $p)
    {
        if ($id_art==$p->id_articulo ) 
        {
        
            $id=$p->id_articulo; 
            $nombre= $p->nombre;
            $tamanio= $p->tamanio;
            $tipo= $p->tipoArti;
            $precioI= $p->precio_inicial;
            $precioF= $p->precio_final;
            $unidadV= $p->uv;
            $limite= $p->limites_descuento;
            $cantidad= $p->cantidad;
            $caducidad=$p->caducidad;
            $d= $p->detalles;
            $uM=$p->umedida;
            $presentacion=$p->presentacion;
        }
    }
        ?>
    <section class="contenido wrapper ">
        <div class="container position-relative card" >
            <div class="card-header">
            <h3>Editar Articulos</h3>
            <?php productosButton() ?>

            </div>
            <form action="productoEditGuardar.php" method="post">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>id </th> 
                        <th>articulo </th> 
                    </tr>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><input type="text" name="nombre" placeholder="" value="<?php echo $nombre; ?>"></td>
                    </tr>
                    <th>Presentacion</th>
                    <th>Categoria</th>
                    <tr>
                        <td><input required id="presentacion"  type="text" value="<?php echo $presentacion; ?>" placeholder="Presentacion" name="presentacion"size="20px">
                        <select   placeholder="unidad" name="unidad" size="1">
                                <?php
                                    $uni = unidadMedida();
                                    foreach ($uni as $c) 
                                    {?>
                                            <option value= <?php echo $c->id_unidad ?> 
                                            <?php  if($uM==$c->umedida){ echo " selected='selected'";} ?>
                                            ><?php echo $c->umedida ?></option><?php
                                    } ?>
                            </select>
                        </td>
                        <td><select   placeholder="categoria" name="categoria" size="1">
                                    <option value="">---  ---</option>
                                    <?php
                                        $catg = categoria();
                                        foreach ($catg as $categoria_art) { 
                                    ?>
                                                <option value= <?php echo $categoria_art->id_tipoArt ?> 
                                                            <?php  if($tipo==$categoria_art->tipoArti){ echo " selected='selected'";} ?>
                                                ><?php echo $categoria_art->tipoArti ?></option>
                                    <?php   } ?>
                                </select>
                            </td>
                    </tr> 
                    <tr>
                        <th  > Precio inicial</th>
                        <th  > Precio Final</th> 
                    </tr>
                    <tr>
                        <td>
                            <input required id="precioI" type="text" name="precioI" placeholder="precio inicial" value="<?php echo $precioI; ?>">
                            <input required id="porcentaje" name="porcentaje"  type="number" placeholder="%" size="10" value=40>
                            <input type="button" onclick="Sumar()" name="suma" value="Calcular">
                        </td>
                        <td><input required Id="precioF" type="text" name="precioF" placeholder="precio final" value="<?php echo $precioF; ?>"></td>
                    </tr>
                        
                        <script type="text/javascript">
                               
                               function Sumar()
                                {
                                var precio=Number(document.getElementById('precioI').value);
                                var porcentaje=Number(document.getElementById('porcentaje').value);

                                var result=precio*porcentaje/100+precio;

                                document.getElementById('precioF').value=result;

                                }
                            </script>
                    <tr>
                        <th> Unidad de Ventas</th> 
                        <th> Limite Descuento</th>
                    </tr>
                    <tr>
                        <td>
                        <select   placeholder="unidad" name="unidadv" size="1">
                                <?php
                                    $uni = cantidad();
                                    foreach ($uni as $c) 
                                    {?>
                                            <option value= <?php echo $c->id ?> 
                                            <?php  if($unidadV==$c->id){ echo " selected='selected'";} ?>
                                            ><?php echo $c->unidadVenta ?></option><?php
                                    } ?>
                            </select>
                        
                        <td><input  required type="text" name="limite" placeholder="limite decuento" value="<?php echo $limite; ?>"><td>       
                    </tr>
                    
                    <tr>
                        <td> Stock</td> 
                        <td>caducidad </td> 
                    </tr>
                    <tr>
                        <td><input  required type="text" name="cantidad" placeholder="cantidad" value="<?php echo $cantidad; ?>">
                        <td>
                            <input type="radio" name="caducidad" value="si"<?php if($caducidad=="si"){ echo "checked";} ?>>Si
                            <input type="radio" name="caducidad" value="no"<?php if($caducidad=="no"){ echo "checked";} ?>>No
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">   Detalle</td> 
                    </tr>
                    <tr> 
                        <td colspan="2" ><textarea  required rows="2" cols="50" name="detalles" placeholder="detalles" value=""><?php echo $d; ?></textarea></td>
                    </tr>
                    
                    <tr>
                        <td  >
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <a href="productos.php" class="btn btn-primary btn-sm">Volver</a>   
                            <button class="btn btn-success btn-sm">Guardar Cliente</button>                         
                        </td> 
                    </tr>    
                </table> 
            </form>
        </div>
    </section>    
<?php 
}
include_once "footer.php"; ?>