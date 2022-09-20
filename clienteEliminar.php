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
                <form action="clienteEliminarRegistrar.php" method="post">    
                <input type="text" name="msj" id="msj" readonly style="visibility:hidden;">
                    <table class="table table-striped table-hover">
                    <tr >
                            <td>id</td>
                            <td >Apellido</td>
                            <td>Nombre</td>
                            <td>Telefono</td>
                            <td>Modificar</td>
                            </tr>
                        <?php 
                        $proveedor=cliente();
                            foreach($proveedor as $p){
                            echo '<tr><td>'.$p->id_cliente.'</td>';
                            echo '<td>'.$p->apellido.'</td>'; 
                            echo '<td>'.$p->nombre.'</td>';
                            echo '<td>'.$p->telefono.'</td>';
                            ?>
                            <td>
                    
                                <button class="btn btn-success btn-lg" onclick="vT(<?php echo $p->id_cliente ?>)">
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