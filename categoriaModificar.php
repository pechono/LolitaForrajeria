<?php include_once "header.php";
$i='false';
if (isset($_POST["categoria"])) {
    $i='true'; 
    $c=$_POST["categoria"];
    echo $c;
} 

?>
<section class="contenido wrapper " >
    <div class="row">
        <div class="col-sm-8">
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
                                foreach($cat as $ct){
                                    echo '<tr><td>'.$ct->id_tipoArt.'</td>';
                                    echo '<td>'.$ct->tipoArti.'</td>'; 
                                    echo '<td>'.$ct->detalles.'</td>';
                                    ?>
                                    <td>
                                    <form action="categoriaModificar.php" method="post">               
                                                    <input type="hidden" name="categoria" value="<?php echo $ct->id_tipoArt ?>">
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
                <form action="categoriaModificarGuardar.php" method="post">
                     <?php $cat=categoria();

                        foreach($cat as $ct)
                        {                        
                        if ($i=='true' && $c==$ct->id_tipoArt ) {
                            $id=$ct->id_tipoArt;
                            $tipo=$ct->tipoArti; 
                            $detalles=$ct->detalles;
                            }
                        }
                       ?>
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>Categoria</td> </tr>
                        <tr><td><input type="text"value="<?php if ($i=='true') { echo $tipo;} ?>" name="tipo" placeholder="Categoria"></td> </tr>
                        <tr><td>Detalles    </td> </tr>
                        <tr><td><input type="text"value="<?php if ($i=='true') { echo $detalles;} ?>" name="detalles" placeholder="Detalles"></td> </tr>    
                        <input type="hidden" name="ctg" value="<?php echo $id; ?>">

                    <tr><td  >
                        <div class="control">
                        
                                <a href="categoriaCargar.php" class="btn btn-primary btn-sm">Volver</a>
                                <button class="btn btn-success btn-sm">Guardar</button>
                                            
                        </div>
                                
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