<?php
include_once "header.php";

$u_var=0;
$f_var=0;
$t_var=0;
if(!isset($_POST["usuario"]) || $_POST["usuario"]==0 ){

$usuarioPost=" 1=2 ";
}else{
    $usuarioPost=" cierrecaja.id_usuario=".$_POST["usuario"];
    $u_var=1;
}

if(!isset($_POST["fecha"]) || $_POST["fecha"]==""){

  $fechaPost="1=2";
    }else{
        $fechaPost=" cierrecaja.fecha=".$_POST["fecha"];
    $f_var=1;
    }
    
    if(!isset($_POST["turno"]) || $_POST["turno"]==""){

        $turnoPost=" 1=2 ";
        }else{
            $turnoPost=" cierrecaja.turno= ".$_POST["turno"];
            $t_var=1;
        }
$where= $usuarioPost." OR ".$fechaPost." OR ". $turnoPost;
//echo $where;
$cierre=cierreCaja($where);    

?>






    <form action="cierrecaja_Anterio.php" method="post">
    <section class="contenido wrapper ">
        <div class="container position-relative card" >
        <div class="card-header">
                
                    <h4>Cierres de Caja </h4>
        </div>
    <table class="table table-striped table-hover">

            <thead class="thead-light">
               
                <tr>
                    <td colspan=3>Cierres de caja</tr>
                <tr>
                    <td>Fecha</td><td>Usuario</td><td>Turno</td>
                </tr>
                <tr>
                    <td><input type="date" name="fecha"<?php if($t_var==1 ){echo "value='". $_POST["fecha"]."'";} ?>>

                </td>
                    <td><select name="usuario">
                        <option value="0">Selecionar Usuario</option>
                        <?php 
                        $Usuarios=usuario();
                        foreach($Usuarios as $User){
                            if($u_var==1 && $User->id_usuario == $_POST["usuario"]){
                            echo  "<option value='". $User->id_usuario ."' selected>".$User->apellido.", ".$User->nombre."</option>";
                            }else{
                            echo "<option value='". $User->id_usuario ."'>" .$User->apellido.", ".$User->nombre."</option>";       
                            }
                        
                        }?>

                    </select></td>
                    <td>
                        <select name="turno">
                            <option value="">Todo</option>
                            <option value="1"<?php if($t_var==1 && $_POST["turno"]==1){echo "selected";} ?>> Mañana</option>
                            <option value="2"<?php if($t_var==1 && $_POST["turno"]==2){echo "selected";} ?>>Tarde</option>
                        </select>
                    </td>
                    <td>
                    <button class="button is-success">buscra</button>
                    </td>
                </tr>
            </table>
        </div>
</sectio>
</form>

<section class="contenido wrapper ">
  <div class="container position-relative card" >
  <div class="card-header">
          
            <h3>Cierres de Caja </h3>
        </div>
    <table class="table table-striped table-hover">

    <thead class="thead-light">
       <tr>
            <td>id</td>
            <td>efectivo</td>
            <td>tarjeta</td>
            <td>cuenta Corriente</td>
            <td>canje</td>
            <td>pago En Cuenta</td>
            <td>Total</td>
            <td>ganancia</td> 
            <td>fecha</td>
            <td>turno</td>
            <td>usuario</td>
         </tr>
    </thead>
    <tbody>
        
    
    
     <?php
//$cierre=cierreCaja();
foreach( $cierre as $cCja){
?>

    <tr>
        <td><?php echo $cCja->id_cierre; ?></td>
        <td><?php echo $cCja->efectivo; ?></td>
        <td><?php echo $cCja->tarjeta; ?></td>
        <td><?php echo $cCja->cCorriente; ?></td>
        <td><?php echo $cCja->canje; ?></td>
        <td><?php echo $cCja->pagoEnCuentaC; ?></td>
        <td><?php echo $cCja->Total; ?></td>
        <td><?php echo $cCja->ganancia; ?></td> 
        <td><?php echo $cCja->fecha; ?></td>
        <td><?php if ($cCja->turno==1){echo "Mañana";}else{ echo "Tarde"; } ?></td>
        <td><?php echo $cCja->apellido.", ".$cCja->nombre; ?></td>
    </tr>
    <?php }?>
    </tbody>
</table>
</div>
</sectio>



<?php
include_once "footer.php";
?>
