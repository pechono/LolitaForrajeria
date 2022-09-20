<?php include_once "header.php";
$i='false';
if (isset($_POST["prov"])) {
    $i='true'; 
    $c=$_POST["prov"];
} 

?>
    <section class="contenido wrapper " >

    <div class="container position-relative card" >
            <div class="card-header">
                <?php proveedoresButton(); ?>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
            <tr >
            <td>id</td>
            <td >Nombre Empresa</td>
            <td>Rubro</td>
            <td>Telefono</td>
            <td>Mail</td>
            <td>Direccion</td>
            <td>Locaidad</td>
            <td></td>

          </tr>
          
          <?php 
         
          $proveedor=obtenerproveedor();
            foreach($proveedor as $p){
              echo '<tr><td>'.$p->id_proveedor.'</td>';
              echo '<td>'.$p->nombre.'</td>'; 
              echo '<td>'.$p->rubro.'</td>';
              echo '<td>'.$p->telefono.'</td>';
              echo '<td>'.$p->mail.'</td>';
              echo '<td>'.$p->direccion.'</td>';
              echo '<td>'.$p->localidad.'</td> ';
             
              ?>
              <td>
              <form action="proveedorModificar.php" method="post">               
                              <button class="btn btn-Danger btn-sm" onclick="vT(<?php echo $p->id_proveedor ?>)">Eliminar
                             </button> 
                          </form>
              </td>
              </tr>
          <?php }?>
                </table>
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