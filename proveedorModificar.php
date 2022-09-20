<?php include_once "header.php";
$i='false';
if (isset($_POST["prov"])) {
    $i='true'; 
    $c=$_POST["prov"];
} 

?>
    <section class="contenido wrapper " >
<div class="row">
  <div class="col-sm-9">
    <div class="card">
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
                               <input required  size=25 type="hidden" name="prov" value="<?php echo $p->id_proveedor ?>">
                              <button class="btn btn-success btn-sm">Modificar
                             </button> 
                          </form>
              </td>
              </tr>
          <?php }?>
                </table>
            </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
        <div class="card-header">
          <h3>Modificar Datos de Cliente</h3>

        </div>
        <div class="card-body">
        <form action="proveedorModificarGuardar.php" method="post">
          <?php $proveedor=obtenerproveedor();
                foreach($proveedor as $p){
                        if ($i=="true" && $c==$p->id_proveedor ) {
                        $id=$p->id_proveedor;
                        $rubro=$p->rubro; 
                        $nombre=$p->nombre;
                        $telefono=$p->telefono;
                        $mail=$p->mail;
                        $direccion=$p->direccion;
                        $localidad=$p->localidad;
                       }
                    }
        ?>
                        <table class="table table-striped table-hover">
                        <tr><td >  <h2>Empresa</h2></td> </tr>
                <tr><td> <input required  size=25 type="text" value="<?php if ($i=='true') { echo $nombre;} ?>" name="empresa" placeholder="Nombre Empresa" size="40px"></h2>    </td> </tr>
                <tr><td>Rubro Empresa</h2>    </td> </tr>
                <tr><td> <input required  size=25 type="text" value="<?php if ($i=='true') { echo $rubro;} ?>" name="rubro" placeholder="Rubro Empresa"size="40px"></h2>    </td> </tr>    
                <tr><td>Telefono</h2>    </td> </tr>
                <tr><td> <input required  size=25 type="text" value="<?php if ($i=='true') { echo $telefono;} ?>" name="telefono" placeholder="Telefono Empresa"size="40px"></h2>    </td> </tr>    
                <tr><td>Mail</h2>    </td> </tr>
                <tr><td> <input required  size=25 type="text" value="<?php if ($i=='true') { echo $mail;} ?>" name="mail" placeholder="ail  Empresa"size="40px"></h2>    </td> </tr>
                <tr><td>Direccion Empresa</h2>    </td> </tr>
                <tr><td> <input required  size=25 type="text" value="<?php if ($i=='true') { echo $direccion;} ?>" name="direccion" placeholder="Direcion Empresa"size="40px"></h2>    </td> </tr>   
                <tr><td>Localidad</h2>    </td> </tr>
                <tr><td> <input required  size=25 type="text" value="<?php if ($i=='true') { echo $localidad;} ?>" name="localidad" placeholder="Localidad Empresa"size="40px"></h2>    </td> </tr>    
                <tr><td>
                 <input required  size=25 type="hidden" name="c" value="<?php echo $id; ?>">
                    <a href="proveedorCargar.php" class="btn btn-primary btn-sm">Volver</a>
                                    <button class="btn btn-success btn-sm">Guardar</button>
                                    
                    
                        </h2>    
                    </td> 
                </tr>    

            </table> 
          </form>
        </div>
    </div>
  </div>
</div>
</section>






<?php include_once "footer.php"; ?>