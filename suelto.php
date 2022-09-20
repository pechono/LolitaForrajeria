<?php
include_once "header.php";
?>
<div class="table">
    <table class="table">
        <tr>
            <td colspan="6">
                Venta De artciulo Suelto
            </td>
        </tr>
        <tr>
            <td colspan="6">selecionar Articulo Para su Venta Suelto</td>
        </tr>
        <tr>
            <td>id</td>
            <td>Articulo</td>
            <td>Categoria</td>
            <td>Tipo Venta</td>
            <td>En Stock</td>
            <td>Abrir</td>
        </tr>
       
            <?php
            $sueltos=suelto();
            foreach ($sueltos as $s){
            ?>
             <tr>
            <td><?php echo $s->id_articulo; ?></td> 
            <td><?php echo $s->nombre; ?></td>
            <td><?php echo $s->tipoArti; ?></td>
            <td><?php echo $s->id_unidadVenta; ?></td>
            <td><?php echo $s->cantidad; ?></td>
            <td>
				<form action="sueltoAbrir.php" method="post">
                <input type="hidden" name="id" value="<?php echo $s->id_articulo ?>">
                                     <button class="button is-primary">
                                        <i class="fa fa-cart-plus"></i>&nbsp;Solicitar
                                    </button>
                            
                        </form>
			</td>
           </tr> <?php }?>
        
    </table>
</div>

<?php
include_once "footer.php";
?>