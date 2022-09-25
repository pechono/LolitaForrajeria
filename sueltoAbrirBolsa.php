<?php include_once "header.php";
?>
<section class="contenido wrapper " id="primera-seccion">
  <div class="container position-relative card" >
  <div class="card-header">
          <h3>Abrir Bolsa </h3>
         <?php // appButton() ?>
         
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
          
    		</tr>
      </thead>    
      <tbody>
        
      <?php 
      if(!isset($_POST["msj"]))
      {
         $productos = obtenerProductos();
      }else{
        $productos = obtenerProductos();
      }

      foreach ($productos as $producto) 
      { 
        if($_POST["msj"]==$producto->id_articulo)
        {
          $id_a= $producto->id_articulo;
          $c=$producto->presentacion;
          $p=$producto->precio_inicial;
          
          ?>
          <tr>
            <th scope="row"><?php echo $producto->id_articulo ?></th>
            <td><?php echo $producto->nombre ?></td>
            <td><?php echo $producto->tamanio ?></td>
            <td><?php echo $producto->tipoArti ?></td>
            <td><?php echo $producto->precio_inicial ?></td>
            <td><?php echo $producto->precio_final ?></td>
            <?php
            $suelto=0;
                if($producto->suelto==1){
                  $suelto=1;
                  $presioEstimado=$p;
                  echo "<td style='color:blue' ><b>Suelto(".$producto->id_unidadVenta.")</b></td>";
                }else{

                  $presioEstimado=$p/$c;
                  echo "<td>".$producto->id_unidadVenta ." </td>";
                }
                
                ?>
            </td>
            <td><?php echo $producto->limites_descuento ?></td>
            <?php
            if ($producto->cantidad<=$producto->stockMinimo) 
            {?>
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
                
      
        
      }
  } ?>

        <script type="text/javascript">
        function Sumar()
        {
        var precio=Number(document.getElementById('precioinicial').value);
        var porcentaje=Number(document.getElementById('porcentaje').value);

        var result=precio*porcentaje/100+precio;

        document.getElementById('preciofinal').value=Math.ceil(result);

        }
        </script> 
        </tbody>
        <tfoot>
        <?php
                if ($suelto==1) 
                {
                    ?>
                <form action="abrirSueltoMCantidad.php" method="post">
                   <tr>     
                          <td colspan=8 style="text-align: right;">
                              <input required id="precioinicial" name="precioinicial"  type="number" placeholder="Precio inicial"size="30px" value="<?php echo $presioEstimado; ?>" >
                              <input required id="porcentaje" name="porcentaje"  type="number" placeholder="%" size="8px" value=40>
                              <input type="button" onclick="Sumar()" name="suma" value="Calcular">
                          </td>
                          <td></td>
                          <td>
                              <input  required id="preciofinal" name="preciofinal"  type="number" placeholder="Precio Final"size="30px">
                      </td>
                  </tr>
                   <tr>
                    <td colspan=10 align="right"> 
                      <input type="hidden" name="id_a" value="<?php echo $id_a; ?>">
                        <a href="suelto.php" class="btn btn-primary btn-sm"> Calcelar</a>
                        <button class="btn btn-success btn-sm">Confirmar </button>
                      </td>
                </tr>
                </form>
                
                <?php    
                }else{
                ?>
                 
                <form action="sueltoAbrir.php" method="post">
                <tr>     
                          <td colspan=8 style="text-align: right;">
                              <input required id="precioinicial" name="precioinicial"  type="number" placeholder="Precio inicial"size="30px" value="<?php echo $presioEstimado; ?>" >
                              <input required id="porcentaje" name="porcentaje"  type="number" placeholder="%" size="8px" value=40>
                              <input type="button" onclick="Sumar()" name="suma" value="Calcular">
                          </td>
                          <td></td>
                          <td>
                              <input  required id="preciofinal" name="preciofinal"  type="number" placeholder="Precio Final"size="30px">
                      </td>
                  </tr>  
                <tr> 
                  <td>
                    <input type="hidden" name="id" value="<?php echo $id_a; ?>">
                      <a href="suelto.php" class="btn btn-primary btn-sm"> Calcelar</a>
                      <button class="btn btn-success btn-sm">Confirmar</button>
                    </td>
               </tr>
                </form>
              
                <?php } ?>
            
        
        <tr>
            <th colspan=10> Al confirmar esta Operacion se abrira el articulo, este constar con la Cantidad que posee este en su empaque. Este se descontara del Stock<th>
        </tr>

        </tfoot>

    </table>
    
  </div>
</section>

<?php include_once "footer.php"; ?>