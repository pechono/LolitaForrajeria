<?php include_once "header.php";
//include_once "funciones.php";
if (!isset($_POST["id_producto"])  ) {
    exit("no se envio datos"); 
}
$productos = obtenerProductos();
      foreach ($productos as $producto) 
      {
        if($_POST["id_producto"]==$producto->id_articulo) 
        {
    
        
          $id=$producto->id_articulo;
          $nombre=$producto->nombre;
          $tamanio=$producto->tamanio;
          $tipo=$producto->tipoArti;
          $pI=$producto->precio_inicial;
          $pF=$producto->precio_final;
          $unidadV=$producto->id_unidadVenta;
          $limite=$producto->limites_descuento;
        }
     }   
?>

<section class="contenido wrapper ">
     <div class="container position-relative card" >
        <div class="card-header">
           <h3> Modificar Precio</h3>
            <?php  stockButton() ?>

        </div>
        <div class="card-bodyr">
            
          <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <th scope="col">Articulo</th>
                    <th scope="col">Presentacion</th>
                </tr>
                <tr>
                    <td scope="col"><?php echo $nombre ?></td>
                    <td scope="col"><?php echo $tamanio ?></td>
                </tr>
                <tr>
                    <th scope="col">Precio Inicial</th>
                    <th scope="col">Precio Final</th>
                </tr>
                <tr>
                <td scope="col"><?php echo $pI ?></td>
                    <td scope="col"><?php echo $pF ?></td>
                </tr>
            </tbody>
         </table>
        </div>
    </div>
</section>
<section class="contenido wrapper "> 
    <form method="post" action="cambiarPrecioRegistrar.php">
     <div class="container position-relative card" >
        <div class="card-header">
           Nuevo Precio
        </div>
        <div class="card-bodyr">
          
            
           
            <table class="table table-striped table-hover">
            <tbody>
                
                <tr>
                    <th scope="col" colspan=1>Precio Inicial</th>
                    <th scope="col" colspan=1>%</th>
                    <th scope="col" colspan=1></th>
                    <th scope="col" colspan=1>Precio Final</th>
                </tr>
                <tr>
                <td><input required id="precioinicial" name="precioinicial"  type="number" placeholder="Precio inicial"size="30px" ></td>
                <td>    <input required id="porcentaje" name="porcentaje"  type="number" placeholder="%" size="8px" value=40></td>
                <td>    <input type="button" onclick="Sumar()" name="suma" value="Calcular"></td>
                    <td><input  required id="preciofinal" name="preciofinal"  type="number" placeholder="Precio Final"size="30px"></td>
                </tr>
            </tbody>
          </table>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <a href="stockCambiarPrecio.php" class="btn btn-primary">Volver</a>                 
                        <button class="btn btn-success">Guardar</button>	
                                               
         
        </div>
    </div> 
   </form> 
</section>

<script type="text/javascript">                          
function Sumar()
{
var precio=Number(document.getElementById('precioinicial').value);
var porcentaje=Number(document.getElementById('porcentaje').value);

var result=precio*porcentaje/100+precio;

document.getElementById('preciofinal').value=Math.ceil(result);

}
</script>   
<?php include_once "footer.php"; ?>
