<?php //include_once "funciones.php";
include_once "header.php";


?>

<section class="contenido wrapper ">
    <div class="container position-relative card" >
            <div class="card-header">
               <h3>informes de Ventas</h3>
                <?php //appButton() ?>
            </div>
            <div class="card-body">
               <h3>informes de Ventas</h3>
                <?php appInformeVenta() ?>
            </div>
           
    </div>
<br>
    <div class="container position-relative card" >
            <div class="card-header">
               <h3>informes  Venta de  Articulos</h3>
                <?php appInformeVentaArticulo() ?>
            </div>
            <div class="card-body">
                <?php //appInformeVentaArticulo() ?>
            </div>
    </div>
<br>       
    <div class="container position-relative card" >
            <div class="card-header">
               <h3>informes Venta Por Cliente</h3>
                <?php //appButton() ?>
            </div>
            <table class="table table-striped table-hover">
                 
                <tr>
                    <th rowspan="3" align="right"><a href="informe_ArtVentaCliente.php?inf=inf" target="_blank" rel="noopener noreferrer">Ventas por Articulo</a> </th>
                    <td><a href="informe_ArtVentaCliente.php?inf=D" target="_blank" rel="noopener noreferrer">Venta de Articulo Por Cliente</a></td>
                    
                </tr>
                <tr>
                    <td><a href="informe_ArtVentaCliente.php?inf=Ms" target="_blank" rel="noopener noreferrer">Venta Mensual por Articulo</a></td>
                    
                </tr>
                <tr>
                    <td><a href="informe_ArtVentaCliente.php?inf=Gnr" target="_blank" rel="noopener noreferrer">Venta General de Articulo</a></td>
                </tr>
            
                
             </table> 
        </div>
</section>


<?php include_once"footer.php";