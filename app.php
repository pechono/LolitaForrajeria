<?php include_once('header.php'); ?>
<section class="contenido wrapper ">
  <div class="container position-relative card" >
  <div class="card-header">
          <h3>Venta - Selecionar Articulos</h3>
         <?php appButton() ?>

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
          <th scope="col">Stock</th>
          <th scope="col">Detalles</th>
          <th scope="col" colspam="4" style="width:50px">cantidad</th>
          
    		</tr>
      </thead>    
      <tbody>
        
      <?php 
      $productos = obtenerProductos();
      foreach ($productos as $producto) 
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

               
                echo "<td>".$producto->id_unidadVenta ." </td>";
               }
              
              ?>
          </td>
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
          <?php 
              $sta=FALSE;
            foreach ($_SESSION["carrito"] as list($a, $b)) 
            {
                if ( $producto->id_articulo==$a)
                { 
                      $sta=TRUE;
                }
            }
               if($sta)
               {?>
                    <td>
                    <form action="carritoEliminar.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo?>">
                        <span class="btn btn-info btn-sm"><i class="fa fa-check"></i>&nbsp;En el carrito </span>
                        </td>
                        <td>
                              <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Quitar</button>
                          </form>
                        </td>
                      <?php 
                } 
                else 
                { ?>
                        <form action="carritoAgregar.php" method="post">
                          <td>  
                            <input type="text" id="name" name="cant_art" required minlength="1" maxlength="8" size="10">
                          </td>
                          <td>
                              <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo ?>">
                              <button class="btn btn-success btn-sm">
                               Agregar 
                              </button>
                          </td>
                        </form>
                    <?php 
                } ?>
                
        </tr>
      <?php 
      
     } ?>        
        </tbody>
    </table>
  </div>
</section>
<br>
<section >
      <div  class="container position-relative card">
        
        <div class="card-header">
        <h3>Articulos Selecionados</h3>   
        <?php appButton() ?>
        </div>
        
        <div class="card-body">
          <h5 class="card-title">Articulos seleccionados</h5>
          <table class="table table-striped table-hover">
          <thead>
            <tr>
              <td scope="col">id</td>
              <td scope="col">Articulo</td>
              <td scope="col">Presentacion</td>
              <td scope="col">Tipo Articulo</td>
              <td scope="col">Precio Fnicial</td>
              <td scope="col">Unidad Venta</td>
              <td scope="col"> Cantidad</td>
              <td scope="col"> Sub Total</td>
              
              
            </tr>
          </thead>  
          <tbody>  
          <?php 
          $Total=0;
           $productos = obtenerProductos();
           foreach ($productos as $producto)
           {
              foreach ($_SESSION["carrito"] as list($a, $b)) 
              {
                if ( $producto->id_articulo==$a)
                {?>
                <tr>
                  <th scope="row" align="center"><?php echo $producto->id_articulo ?></th>
                  <td><?php echo $producto->nombre ?></td>
                  <td><?php echo $producto->tamanio ?></td>
                  <td><?php echo $producto->tipoArti ?></td>
                  <td align="center"><?php echo $producto->precio_final ?></td>
                        <?php
                    if($producto->suelto==1){
                      echo "<td style='color:blue' ><b>Suelto(".$producto->id_unidadVenta.")</b></td>";
                    }else{

                    
                      echo "<td>".$producto->id_unidadVenta  ."</td>";
                    }
                    
                    ?>
                  <td align="center"><?php echo  $b ?></td>
                  <td><?php echo  $producto->precio_final*$b; 
                                  $Total=$Total+$producto->precio_final*$b;
                ?>
                  </td>
                </tr>       
                 <?php
                }
              }
            }
          ?>
                <tr>
                  <td colspan=5  align="right"></td>
                  <td colspan=1 align="center">Total</td>
                  <th> <?php echo $Total?><th>
                </tr>
          </tbody>
          </table> 

          <div class="card-body d-flex justify-content-between align-items-center">
									
            <a href="carritoBorrarSession.php"  class="btn btn-primary btn-sm">Cancelar</a>
            <a href="ventaPreparacion.php" class="btn btn-success btn-sm">Realizar Venta</a>
					</div>
        </div>

      </div>
</section>
<?php include_once('footer.php'); ?>