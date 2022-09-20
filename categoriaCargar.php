<?php include_once "header.php";
?>


<section class="contenido wrapper " >
    <form action="categoriaGuardar.php" method="post">

    <div class="row">
    <div class="col-sm-6">
        <div class="card">
                <div class="card-header">
                <?php categoriaButton() ?>


                </div>
                <div class="card-body">
                <table class="table table-striped table-hover">
                <tr >
                    <th>id</th>
                    <th >Categoria</th>
                    <th>Detalles</th>
                </tr>
                        <?php 
                        $cat=categoria();
                        foreach($cat as $c){
                          echo '<tr><td>'.$c->id_tipoArt.'</td>';
                          echo '<td>'.$c->tipoArti.'</td>'; 
                          echo '<td>'.$c->detalles.'</td></tr>';
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
                <table class="table table-striped table-hover">
                <tr><td>Categoria</td> </tr>
                <tr><td><input type="text" name="categoria" placeholder="Categoria"></td> </tr>
                <tr><td>Detalles    </td> </tr>
                <tr><td><input type="text" name="detalles" placeholder="Detalles"></td> </tr>    
                
                <tr><td>
                                 
                                    <a href="categoriaCarga.php" class="btn btn-primary btn-sm">Volver</a>  
                                     <button class="btn btn-success btn-sm">Guardar</button>
                            
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