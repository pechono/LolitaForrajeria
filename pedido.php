<?php
include_once("header.php");
?>
<section class="contenido wrapper ">
  <div class="container position-relative card" >
    <div class="card-header">
          <h3>Realizar Pedido</h3>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
            <td>id</td>
            <td>Articulo</td>
            <td>Presentacion</td>
            <td>Categoria</td>
            <td>Precio Inicial </td>
            <td>Precio final</td>
            <td>En estock</td>
            <td>Stock Minimo</td>
            <td>Proveedor</td>
        </tr>   
        <thead>
        <?php
        $stocks=stockPedido();
        foreach ($stocks as $sk) {
    
        ?>
        <tbody>
        <tr>
            <td><?php echo $sk->id_articulo; ?> </td>
            <td><?php echo $sk->nombre; ?> </td> 
            <td><?php echo $sk->tamanio; ?> </td> 
            <td><?php echo $sk->tipoArti; ?> </td> 
            <td><?php echo $sk->precio_inicial; ?></td> 
            <td><?php echo $sk->precio_final; ?></td> 
            
                <?php 
                    if($sk->diferencia <0){
                ?>
                    <td style="color:red"; ><b><?php echo $sk->cantidad ?></b></td>
                <?php
                    }else{
                ?>        
                        <td><b><?php echo $sk->cantidad ?></b></td>
                <?php
                    }
                ?> 
            
            <td><?php echo $sk->stockMinimo; ?> </td>
            <td><?php echo $sk->proveedor; ?> </td>
            <?php if (productoYaEstaEnPedidoo($sk->id_articulo)) { 
                ?>
			<td>
				<form action="eliminar_del_pedido.php" method="post">
                            <input type="hidden" name="id_articulo" value="<?php echo $sk->id_articulo;?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span></td>
							<td>
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                </form>
			</td>
			<?php 
            } else { ?>
							<form action="agregar_al_pedido.php" method="post">
                    <td>
                        <input type="text" id="name" name="cant_art" required minlength="1" maxlength="8" size="10">
                    </td>
                    <td>
                                    <input type="hidden" name="id_articulo" value="<?php echo $sk->id_articulo ?>">
                                    <button class="btn btn-secondary btn-sm">
                                        <i class="fa fa-cart-plus"></i>&nbsp;Solicitar
                                    </button>
                        
                    </td>
                </form>

			<?php }
            } ?>
            </tbody>
           
                <form action="registarPedido.php" method="post">
			   
		  
            <tfoot>
                <tr>
                <td colspan=8 align="right">
                    <h1>Seleccionar Proveedor</h1>
                <select name="proveedor">
                    <?php
                    $p=obtenerproveedor();
                    foreach($p as $oP){
                    echo '<option value="'.$oP->id_proveedor.'">'.$oP->nombre."-".$oP->localidad.'</option>';
                    }
                    
                    ?>
                </select>
                    
                    <button class="btn btn-success btn-sm">Realizar Pedido</button>
				
            
			</td>
                </tr>
            </tfoot>
           
		    <tr>
               
        </form>
		
    </table>

    </div>
</section>
<?php
include_once"footer.php";
?>
