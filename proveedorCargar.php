<?php include_once "header.php";
?>


<section class="contenido wrapper " >
    <form action="proveedorGuardar.php" method="post">

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
                                echo '<td>'.$p->localidad.'</td>  </tr> ';
                               
                            }
                            ?>
                       
                </table>
               </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">

            <div class="card-header">
              Ingresar Nuevo Cliente
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                                <tr><td >  Empresa</td> </tr>
                    <tr><td  > <input required size=32 type="text" name="empresa" placeholder="Nombre Empresa">    </td> </tr>
                    <tr><td  > Rubro Empresa    </td> </tr>
                    <tr><td  ><input required  size=32 type="text" name="rubro" placeholder="Rubro Empresa">    </td> </tr>    
                    <tr><td  > Telefono    </td> </tr>
                    <tr><td  > <input  required size=32 type="text" name="telefono" placeholder="Telefono Empresa">    </td> </tr>    
                    <tr><td  >Mail    </td> </tr>
                    <tr><td  ><input required  size=32 type="email" class="form-control" name="mail" placeholder="Mail Empresa">    </td> </tr>
                    <tr><td  >Direccion Empresa    </td> </tr>
                    <tr><td  ><input required  size=32 type="text" name="direccion" placeholder="Direcion Empresa">    </td> </tr>   
                    <tr><td  >Localidad    </td> </tr>
                    <tr><td  ><input required  size=32 type="text" name="localidad" placeholder="Localidad Empresa">    </td> </tr>    
                    <tr>
                        <td  ><a href="proveedorCargar.php" class="btn btn-primary btn-sm">Volver</a>
                            <input type="submit" value="Guardar" class="btn btn-success btn-sm">
                              
                                
                                
                        </td> 
                    </tr>    
                

                </table>
            </div>
        </div>
    </div>
    </div>       
    </form>
</section>





<?php include_once "footer.php"; ?>