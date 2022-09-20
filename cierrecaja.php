<?php


include_once "header.php";
include_once "consultas.php";
$hoy=date('Y-m-d');
?>


<form action="registrar_cierre.php" method="post">

<section class="contenido wrapper ">
  <div class="container position-relative card" >
        <div class="card-header">
          <h3>Arqueo de Caja:</h3><h5><?php echo $hoy; ?></h5>
        </div> 
        <table class="table table-striped table-hover">
          <tr>
              
              <th > <font size=5>Usuario: </font> <font size=4><?php $us=obtenerUsuario($_SESSION["idUsuario"]);
                                                foreach ($us as $u) {
                                                  echo "". $u->apellido .", ". $u->nombre; 
                                                  # code...
                                                }?></font></th>
              <td ><font size=5>Turno: </font><font size=4><?php if($_SESSION["turno"]==1){ echo "Mañana";}else{echo "Tarde";}?> </font> </td>
          </tr>
          <tr>
        <td colsapn"2></td>
          </tr>
          <tr>
              <td ><font size=5>tipo de Venta </font>
              <td ><font size=5> </font>
          
              <td rowspan=5 align="center"><font size=5>Total Vendido </font><br><font size=7 >
                                              <?php $arqT=arqueoTotal();
                                                foreach ($arqT as $a) {
                                                  $subV=  $a->v; 
                                                  # code...
                                                }
                                                $arqp=arqueoPagocC();
                                                foreach ($arqp as $a) {
                                                $subp=  $a->p*(-1); 
                                                  # code...
                                                }
                                                
                                                echo $subV+$subp;
                                                $cierreTota=$subV+$subp;
                                                ?></font></td>
          </tr>
              <tr>
                  <td align="right"><font size=5>Cantado Efectivo:</font></td><td align="left" ><font size=5>
                                              <?php $arqE=arqueoEfectivo();
                                                foreach ($arqE as $a) {
                                                  echo  $a->v; 
                                                $cierreEfectivo=$a->v;
                                                }?></font></td>    
              </tr>
          
              <tr><td align="right"><font size=5>Tarjeta: </font></td><td ><font size=5> 
                                              <?php $arqJ=arqueotarjeta();
                                                foreach ($arqJ as $a) {
                                                  echo  $a->v; 
                                                $cierreTarjeta=$a->v;
                                                }?></font></td>    </tr>
          
              <tr><td align="right" ><font size=5>Cuenta Corriente: </font></td><td ><font size=5>
                                              <?php $arqC=arqueocCorrinete();
                                                foreach ($arqC as $a) {
                                                  echo  $a->v; 
                                                  $cierreCorriente=$a->v;
                                                }?></font></td>    </tr>
        
              <tr><td align="right"><font size=5>Canje: </font></td><td ><font size=5> 
                                              <?php $arqJ=arqueoCanje();
                                                foreach ($arqJ as $a) {
                                                  echo  $a->v; 
                                                $cierreCanje= $a->v;
                                                }?></font></td>    </tr>
              <tr><td align="right"><font size=5>Entrega en Cuenta Corriente: </font></td><td ><font size=5> 
                                              <?php echo $subp;?></font></td>    </tr>
              <tr><td align="right"><font size=5> </font></td><td ><font size=5></font></td>    </tr>
        </table>
    </div>
<section>
</div>
<section class="contenido wrapper ">
  <div class="container position-relative card" >
        <div class="card-header">
          <h3>Arqueo de Caja:</h3><h5><?php echo $hoy; ?></h5>
        </div> 
        <table class="table table-striped table-hover">
    <tr>
        <td>id</td>
        <td>Articulos Vendidos</td>
        <td>Cantidad</td>
        
        <td>ganancia</td>
    </tr>
    <?php
    $sum=0;
    $aA=arqueoArticulo();
            foreach ($aA as $u)        { 
                 $sum=$sum + $u->g; ?>
    <tr>
        <td ><?php echo $u->id_articulo;?></td>
        <td > <?php echo $u->nombre;?></td>
        <td ><?php echo $u->c;?></td>
        <td ><?php echo $u->g;?></td>
    </tr>
<?php }?>
                <tr>
                    <td colspan=3 align="right"><b> Total Ganancia</b></td>
                    <td><?php echo $sum;?></td>
                </tr>
    </table>
 

 <input type="hidden" name="usuario" value="<?php echo $_SESSION["idUsuario"];?>">
 <input type="hidden" name="turno" value="<?php echo $_SESSION["turno"];?>">
 <input type="hidden" name="fecha" value="<?php echo date('Y-m-d');;?>">

<input type="hidden" name="efectivo" value="<?php echo$cierreEfectivo;?>">
<input type="hidden" name="tarjeta" value="<?php echo$cierreTarjeta;?>">
<input type="hidden" name="corriente" value="<?php echo$cierreCorriente;?>">
<input type="hidden" name="canje" value="<?php echo $cierreCanje;?>">
<input type="hidden" name="pagoc" value="<?php echo $subp;?>">
<input type="hidden" name="total" value="<?php echo  $cierreTota;?>">
<input type="hidden" name="ganancia" value="<?php echo $sum;?>">
<button class="button is-success is-large" onclick="vT()">
                                <i class="fa">Finalizar Cierre</i>
            </button>

          </div>
          </div>
<section>          
</form>
<?php
include_once "footer.php";


?>