<?php include_once "header.php";
$i='false';
if (isset($_POST["cliente"])) {
    $i='true'; 
    $c=$_POST["cliente"];
    echo $c;
} 

?>
    <section class="contenido wrapper " >
<div class="row">
  <div class="col-sm-8">
    <div class="card">
            <div class="card-header">
            <?php clienteButton() ?>

            </div>
            <div class="card-body">
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
                        <form action="clienteModificar.php" method="post">               
                                        <input type="hidden" name="cliente" value="<?php echo $p->id_cliente ?>">
                                        <button class="btn btn-secondary btn-sm">
                                          Modifocar Cliente
                                            </button> 
                                    </form>
                        </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
        <div class="card-header">
          <h3>Modificar Datos de Cliente</h3>

        </div>
        <div class="card-body">
        <form action="clienteModificarGuardar.php" method="post">
          <?php $proveedor=cliente();
                foreach($proveedor as $p){
                        if ($i=='true' && $c==$p->id_cliente ) 
                        {
                            $id=$p->id_cliente;
                            $apellido=$p->apellido; 
                            $nombre=$p->nombre;
                            $telefono=$p->telefono;
                        }
                    }
        ?>
            <table class="table table-striped table-hover">
            </tr>
              <tr><td  <h2>Apellido </h2></td> </tr>
              <tr><td  <h2><input type="text" name="apellido" placeholder="Apellido" value="<?php if ($i=='true') { echo $apellido;} ?>"></h2>    </td> </tr>
              <tr><td  <h2>nombre</h2>    </td> </tr>
              <tr><td  <h2><input type="text" name="nombre" placeholder="nombre" value="<?php if ($i=='true') { echo $nombre;} ?>"></h2>    </td> </tr>    
              <tr><td  <h2>Telefono</h2>    </td> </tr>
              <tr><td  <h2><input type="text" name="telefono" placeholder="Telefono "value="<?php if ($i=='true') { echo $telefono;} ?>"></h2>    </td> </tr>    
              <input type="hidden" name="cliente" value="<?php echo $id; ?>">
              <tr><td  <h2>
                  <div class="control">
                                  <button class="btn btn-success btn-sm">Guardar Cliente</button>
                                  <a href="clienteModificar.php" class="btn btn-primary btn-sm">Volver</a>
                              </div>
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