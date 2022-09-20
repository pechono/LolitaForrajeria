<?php include_once "header.php";
$i='false';
if (isset($_POST["cliente"])) {
    $i='true'; 
    $c=$_POST["cliente"];
    echo $c;
} 

?>
<section class="contenido wrapper " >
  <div class="container position-relative card" >
            <div class="card-header">
            <?php clienteButton() ?>
            </div>
            <div class="card-body">
                <form action="categoriaEliminarRegistrar.php" method="post">    
                <input type="text" name="msj" id="msj" readonly style="visibility:hidden;">
                    <table class="table table-striped table-hover">
                    <tr >
                            <<tr >
                                <th>id</th>
                                <th >Categoria</th>
                                <th>Detalles</th>
                            </tr>
                            </tr>
                        <?php 
                         $cat=categoria();
                         foreach($cat as $ct){
                             echo '<tr><td>'.$ct->id_tipoArt.'</td>';
                             echo '<td>'.$ct->tipoArti.'</td>'; 
                             echo '<td>'.$ct->detalles.'</td>';
                            ?>
                            <td>
                    
                                <button class="btn btn-success btn-lg" onclick="vT(<?php echo $ct->id_tipoArt?>)">
                                Eliminar Cliente
                                </button> 
                                </td>
                            </tr>
                        <?php }?>
                    </table>
              </form>
            </div>
        </div>
    </div>
  
</section>
 <script type="text/javascript">
function vT(c)
{
    var mensaje;
    var opcion = confirm("Desea Realizar la Venta");
    if (opcion == true) {
        mensaje = c;
	} else {
	    mensaje = -1;
	}
	document.getElementById("msj").value = mensaje;
}
</script> 

<?php include_once "footer.php"; ?>