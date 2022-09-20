<?php include_once('header.php'); ?>

<section class="contenido wrapper ">
    <div  class="container position-relative card">  
    <div class="card-header ">
        <h2 class="is-size-2">Nuevo producto</h2>
        
        <?php productosButton() ?>
        </div>
            <div class="card-body">
                <form action="stockIngresar.php" method="post">
                        <table class="table table-striped table-hover">
                            <tbody>  
                                <tr>
                                    <td colspan="2"> Nombre Articulo</td>
                                </tr>
                                <tr>
                                    <td colspan=""><input required id="nombre"  type="text" placeholder="Nombre" name="nombre"size="60px"></td>
                                    <td colspan=""><input required id="presentacion"  type="text" placeholder="Presentacion" name="presentacion"size="20px">
                                        <select   placeholder="unidad" name="unidad" size="1">
                                                <?php
                                                    $uni = unidadMedida();
                                                    foreach ($uni as $c) { 
                                                ?>
                                                    <option value= "<?php echo $c->id_unidad ?> "><?php echo $c->umedida ?></option>
                                                <?php   } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Seleccione Categoria</td>
                                    <td> Perecedero</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select   placeholder="categoria" name="categoria" size="1">
                                            <option value="">---  ---</option>
                                            <?php
                                                $catg = categoria();
                                                foreach ($catg as $categoria_art) { 
                                            ?>
                                                <option value= "<?php echo $categoria_art->id_tipoArt ?>" ><?php echo $categoria_art->tipoArti ?></option>
                                            <?php   } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="radio" name="caducidad" value="si">Si
                                        <input type="radio" name="caducidad" value="no">No
                                    </td>
                                </tr>
                                <tr>
                                    <td>Precio Inicial &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    %</td>
                                    <td>Precio Final</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input required id="precioinicial" name="precioinicial"  type="number" placeholder="Precio inicial"size="30px" >
                                        <input required id="porcentaje" name="porcentaje"  type="number" placeholder="%" size="8px" value=40>
                                        <input type="button" onclick="Sumar()" name="suma" value="Calcular">
                                    </td>
                                    <td><input  required id="preciofinal" name="preciofinal"  type="number" placeholder="Precio Final"size="30px"></td>
                                </tr>
                            
                            <script type="text/javascript">
                               
                               function Sumar()
                                {
                                var precio=Number(document.getElementById('precioinicial').value);
                                var porcentaje=Number(document.getElementById('porcentaje').value);

                                var result=precio*porcentaje/100+precio;

                                document.getElementById('preciofinal').value=Math.ceil(result);

                                }
                            </script>

                                <tr>
                                    <td>Limite Descuento</td>
                                    <td>Unidad/cantidad de Venta</td>
                                </tr>
                                <tr>
                                    <td><input required id="desceunto" name="descuento"  type="number" placeholder="Descuentoo"size="30px"></td>
                                    <td><select   placeholder="Unidad/Cantidad" name="unidadcantidad" size="1">
                                            <?php
                                                $cnt = cantidad();
                                                foreach ($cnt as $cant) { 
                                            ?>
                                                        <option value= <?php echo $cant->id ?> ><?php echo $cant->unidadVenta ?></option>
                                            <?php   } ?>
                                        </select>
                                        <input  type="checkbox" id="proActive" name="proActive"  value="1"> 
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><textarea name="detalles" rows="5" cols="90" value= "-" placeholder="Detalles" required></textarea></td>
                                </tr>
                        

                            
                            </tbody>
                        </table> 

                    <div class="card-body d-flex justify-content-between align-items-center">
                        <input  type="hidden" name="stock" value=1>
                        <a href="productos.php" class="btn btn-primary">Volver</a>                 
                        <button class="btn btn-success">Guardar</button>	
                                               
                    </div>
                </form>
            </div>
    </div>
</section>
<?php include_once('footer.php'); ?>