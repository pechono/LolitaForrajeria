<?php include_once "header.php";
?>


<section class="contenido wrapper " >
    

    <div class="row">
    <div class="col-sm-6">
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
                            </tr>
                        <?php 
                        $proveedor=cliente();
                            foreach($proveedor as $p){
                            echo '<tr><td>'.$p->id_cliente.'</td>';
                            echo '<td>'.$p->apellido.'</td>'; 
                            echo '<td>'.$p->nombre.'</td>';
                            echo '<td>'.$p->telefono.'</td></tr>';
                            }
                        ?>
                        
                    </table>
                </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">

            <div class="card-header">
              Ingresar Nuevo Cliente
            </div>
            <div class="card-body">
            <?php
            if(isset($_GET["x"])){
            ?>
                <form action="clienteGuardar.php" method="post">
                    <table class="table table-striped table-hover">
                    </tr>
                        <tr><td >Apellido </td> </tr>
                        <tr><td ><input type="text" required name="apellido" placeholder="Apellido">   </td> </tr>
                        <tr><td >nombre   </td> </tr>
                        <tr><td ><input type="text" required name="nombre" placeholder="nombre">   </td> </tr>    
                        <tr><td >Telefono   </td> </tr>
                        <tr><td ><input type="text" required name="telefono" placeholder="Telefono ">   </td> </tr>    
                            
                        <tr><td >
                            <div class="control">
                                            <input type="hidden" name="volver" >
                                            <a href="ventaPreparacion.php" class="btn btn-primary btn-sm">Volver</a>
                                            <button class="btn btn-success btn-sm">Guardar Cliente</button>
                                        </div>
                                </h2>    
                            </td> 
                        </tr>    

                    </table>
                </form>
            <?php
            }
            else
            { ?>
            <form action="clienteGuardar.php" method="post">
                <table class="table table-striped table-hover">
                </tr>
                    <tr><td >Apellido </td> </tr>
                    <tr><td ><input type="text" required name="apellido" placeholder="Apellido">   </td> </tr>
                    <tr><td >nombre   </td> </tr>
                    <tr><td ><input type="text" required name="nombre" placeholder="nombre">   </td> </tr>    
                    <tr><td >Telefono   </td> </tr>
                    <tr><td ><input type="text" required name="telefono" placeholder="Telefono ">   </td> </tr>    
                        
                    <tr><td >
                        <div class="control">
                                        
                                        <a href="productos.php" class="btn btn-primary btn-sm">Volver</a>
                                        <button class="btn btn-success btn-sm">Guardar Cliente</button>
                                    </div>
                            </h2>    
                        </td> 
                    </tr>    

                </table>
            </form>
            <?php }?>
        
        
            </div>
        </div>
    </div>
    </div>       
    
</section>

<?php include_once "footer.php"; ?>