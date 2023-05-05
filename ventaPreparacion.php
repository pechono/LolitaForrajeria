
<?php include_once('header.php'); ?>
<section class="contenido wrapper ">
  <div class="container position-relative card" >
    <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">carrito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
    </div>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Articulo</th>
            <th scope="col">Presentacion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Preciol</th>
            <th scope="col">Unidad cant</th>
            <th scope="col">Limite Descuento</th>
            <th scope="col">Stock</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Sub Con descuento</th>
            <th scope="col">Aplicar descuento</th>
            <th scope="col"  style="width:50px">cantidad</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>    
        <tbody>
          <?php 
              $Total=0;
              $text=0;
              $productos = obtenerProductos();
              foreach ($productos as $producto)
              {
                foreach ($_SESSION["carrito"] as list($a, $b)) 
                {
                  if ( $producto->id_articulo==$a)
                  {
                      $Total =$Total + $producto->precio_final*$b;
                      $text++;
                      ?>
                      <tr>
                            <th scope="row" align="center"><?php echo $producto->id_articulo ?></th>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php echo $producto->tamanio ?></td>
                            <td><?php echo $producto->tipoArti ?></td>
                            <td><?php echo "$".$producto->precio_inicial;?></td>
                            <td><?php echo $producto->id_unidadVenta ?></td>
                            <td><?php echo "%".$producto->limites_descuento ?></td>


                            <td><?php echo $producto->cantidad ?></td>
                            <td align="center"><?php echo  $b ?></td>
                            <td><?php echo  $producto->precio_final*$b;?></td>
  <script type="text/javascript">
    var i
    var precio=0;
    var porcentaje=0;
    var result;
    var acum=0;
    var totaldesc=<?php echo $Total; ?>;
   
           function Sumar(id){
            
                i=id;
                precio=Number(document.getElementById('precio'+id).value);
                porcentaje=Number(document.getElementById('porcentaje'+id).value);
                result=precio-precio*porcentaje/100;
                res=precio*porcentaje/100;
                acum=acum+ res;

                t=totaldesc-acum;
                document.getElementById('porcentaje'+id).value=0;
                document.getElementById('precio'+id).value=result;
                document.getElementById('total').value=acum;
                document.getElementById('totaldesc').value=t;
                return result;
            }
</script>
  
                            <td><input type="text"  size="6px"  id="precio<?php echo $text ?>" value="<?php echo $b* $producto->precio_final ?>" disabled="disabled" </td>
                            <td><input type="text"  size="2px"  id="porcentaje<?php echo $text ?>" value="0"> </td>  
                            <td ><input type="submit" onclick="Sumar(<?php echo $text ?>)" name="suma" value="Calcular" class="btn btn-secondary btn-sm"></td>
                            <td>
                                  <form action="carritoEliminar.php" method="post">               
                                      <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo; ?>">
                                      <input type="hidden" name="redireccionar_carrito" value="1">
                                      <button type="submit" class="btn btn-danger btn-sm">Danger</button>
                                  </form>
                            </td>
                      </tr> <?php    
                  }
                }
              }
                  ?>
        </tbody>
        <tfoot>
            <tr>
                  <td colspan="1" class="is-size-4 has-text-right"><strong>Total</strong></td>
                  <td colspan="2" class="is-size-4"><?php echo number_format($Total, 2) ?></td>
                  <td> </td>                    
            </tr>
        </tfoot>
    </table>
  </div>
</section>
<br>
<section >
      <div  class="container position-relative card">
        
        <div class="card-header">
          <?php nuevoCliente()
          ?>
        </div>
        <form action="ventaTerminar.php" method="post">
          <div class="card-body">
            <h5 class="card-title">Articulos seleccionados</h5>
                
            <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                      <th>Seleccionar Cliente</th>
                      <th colspan=4> Seleccionar Forma de pago</th>
                      
                      </tr>
                  </thead>
                  <tbody>
                    <tr>     
                      <th>
                        <select   placeholder="cliente" name="cliente" size="1">
                              <?php
                              $Clientes = cliente();
                              foreach ($Clientes as $cliente) 
                              {?> 
                                  <option value= <?php echo $cliente->id_cliente ?> ><?php echo $cliente->apellido .", ".$cliente->nombre ?></option>
                              <?php   
                              } ?>
                        </select>
                      </th>
                      <th colspan=3>
                        <?php
                        $pagos = tipopago();
                        foreach ($pagos as $pago) 
                        {?> 
                          <input required type="radio" name="tipov" value=<?php
                              if( $pago->id_tipoventa==1)
                              {
                                  echo "'".$pago->id_tipoventa ." ' checked";
                              }else
                              {
                                  echo "'".$pago->id_tipoventa."'";   
                              }
                              ?> id="<?php echo $pago->id_tipoventa ?>"><?php 
                                  if($pago->id_tipoventa==1)
                                  {
                                    echo '<label for="'.$pago->id_tipoventa .'"><img src="img/efectivo.png" width="40" height="40" align="top"></label>';
                                  }elseif($pago->id_tipoventa==2)
                                  {
                                      echo '<label for="'.$pago->id_tipoventa .'"><img src="img/tarjeta.png"width="40" height="40"align="top"></label>';
                                  }elseif($pago->id_tipoventa==3)
                                  {
                                    echo'<label for="'.$pago->id_tipoventa .'" onclick="entrega(3)" id="3"><img src="img/cuentacorriente.png"width="40" height="40"></label>';
                                  }elseif($pago->id_tipoventa==4)
                                  {
                                    echo  '<label for="'.$pago->id_tipoventa .'"><img src="img/canje.png"width="40" height="40"align="top"></label>';
                                  }
                        } ?>
                      </th>

                      
                      </tr>
                      <tr>
                      <th>Total Sin Descuento</th>
                      <th>Total Con descuento</th>
                      <th colspan="2">Descuento en Pesos</th>
                      </tr>

                      <tr>
                        <th><?php echo number_format($Total, 2) ?></th>
                        <td><input type="text"  size="5px"  id="totaldesc" value="0"   size="15px"    disabled="disabled" ></td>
                        <td  colspan="2"><input type="text"  size="5px" name="desc"  id="total" value=0   size="15px" ></td>
                     
                    </tr>
                    <tr>
                          <th colspan=2>Detalles de Operacion</th>
                          <th colspan=2 text-align="right">Entrega en cuenta corriente</th>
                        
                          

                    </tr>
                    <tr>
                      <th colspan=3><textarea name="detallesop" rows="2" cols="60"  placeholder="Detalles" value="-"></textarea></th>
                      <td colspan=1><input type="text"  size="5px" name="entrega"  id="entrega"    size="15px"value="0"></td>

                    </tr>
                    <tr>
                      <th colspan=2>Detalles de Descuento</th> 
                    </tr>
                    <tr>
                      <th colspan=4><textarea name="detallesdes" rows="2" cols="60"  placeholder="Detalles" value="-"></textarea></th>

                    </tr>
                  </tbody>

                  <tfoot>
                      <tr>
                          <td colspan="2" class="is-size-4 has-text-right"><strong></strong></td>
                          <td colspan="2" class="is-size-4"><?php echo number_format($Total, 2); ?></td>
                      </tr>
                  </tfoot>
            </table>

            <input type="hidden" name="total" value="<?php echo $Total; ?>">
              <input type="text" name="msj" id="msj" readonly style="visibility:hidden;">
              <button class="btn btn-success btn-lg" onclick="vT()">
                <i class="fa fa-check">Terminar Compra</i>
            </button>
        </form>
<script type="text/javascript">
function vT()
{
    var mensaje;
    var opcion = confirm("Desea Realizar la Venta");
    if (opcion == true) {
        mensaje = "1";
	} else {
	    mensaje = "0";
	}
	document.getElementById("msj").value = mensaje;
}
</script> 

        </div>

      </div>
</section>


<?php include_once"footer.php"; ?>


