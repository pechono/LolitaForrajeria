
<?php
include_once "funciones.php";

function informeVenta()
{    
    $bd = obtenerConexion();  
    $sql = "SELECT operacion.id_operacion, operacion.venta, operacion.fecha, operacion.descuento, operacion.detalle, tipoventa.tipoventa, operacion.detalles, \n"
    . "cliente.apellido, cliente.nombre\n"
    . "FROM operacion inner join tipoventa on operacion.id_tipoVenta=tipoventa.id_tipoventa \n"
    . "inner join cliente on cliente.id_cliente=operacion.id_cliente;";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function informeVentaDiaria()
{  
    $hoy=date('Y-m-d');


    $bd = obtenerConexion();
    
    $sql = "SELECT operacion.id_operacion, operacion.venta, operacion.fecha, operacion.descuento, operacion.detalle, tipoventa.tipoventa, operacion.detalles, \n"
    . "cliente.apellido, cliente.nombre\n "
    . "FROM operacion inner join tipoventa on operacion.id_tipoVenta=tipoventa.id_tipoventa \n"
    . "inner join cliente on cliente.id_cliente=operacion.id_cliente "
    . "WHERE operacion.fecha = '".$hoy."';";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function informeVentaMes()
{  
    $mes= date("m")  ;
    $bd = obtenerConexion();
    $sql = "SELECT operacion.id_operacion, operacion.venta, operacion.fecha, operacion.descuento, operacion.detalle, tipoventa.tipoventa, operacion.detalles, \n"

    . "cliente.apellido, cliente.nombre\n"

    . "FROM operacion inner join tipoventa on operacion.id_tipoVenta=tipoventa.id_tipoventa \n"

    . "inner join cliente on cliente.id_cliente=operacion.id_cliente\n"

    . "WHERE MONTH(operacion.fecha) =".$mes.";";

    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function informeVentaGeneralver()
{  
    $sql="SELECT operacion.id_operacion, operacion.venta, operacion.fecha, operacion.descuento, operacion.detalle, "
." tipoventa.tipoventa, operacion.detalles, " 
." cliente.apellido, cliente.nombre "

." FROM operacion inner join tipoventa on operacion.id_tipoVenta=tipoventa.id_tipoventa "
." inner join cliente on cliente.id_cliente=operacion.id_cliente ";
//"WHERE ". $cliente ."  OR ". $descuento ."  OR ".$detalles ." OR " .$monto. " OR ". $tipov ." OR ".$fecha;
$bd = obtenerConexion();

    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function informeVentaGeneral($sql)
{  
    $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function informeArtVentaI()
{  
    $hoy=date('Y-m-d');
    $bd = obtenerConexion();  
    $sql = "SELECT articulo.id_articulo as id, articulo.nombre,concat(articulo.presentacion, ' - ', unidadmedida.umedida) as tamanio, venta.precioI as precio_inicial ,\n"

    . "         venta.precioF as precio_final , sum(venta.cantidad) as totalc, SUM(venta.precioI*venta.cantidad) as totalInicial,\n"

    . "         sum(venta.precioF*venta.cantidad) as totalFinal, SUM((venta.precioF*venta.cantidad)-(venta.precioI*venta.cantidad)) as GananciaTotal\n"

    . "         FROM venta INNER join articulo on venta.id_articulo=articulo.id_articulo \n"

    . "         INNER JOIN operacion ON venta.id_operacion =operacion.id_operacion\n"

    . "          INNER JOIN unidadmedida on unidadmedida.id_unidad=articulo.id_unidad\n"

    . "     GROUP BY articulo.id_articulo";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function informeArtVentaDiaria()
{  
    $hoy=date('Y-m-d');
    $bd = obtenerConexion();  
    $sql = "SELECT articulo.id_articulo as id,articulo.nombre,concat(articulo.presentacion, ' - ', unidadmedida.umedida) as tamanio, venta.precioI as precio_inicial ,\n"
    . "     venta.precioF as precio_final , sum(venta.cantidad) as totalc, SUM(venta.precioI*venta.cantidad) as totalInicial,\n"
    . "     sum(venta.precioF*venta.cantidad) as totalFinal, SUM((venta.precioF*venta.cantidad)-(venta.precioI*venta.cantidad)) as GananciaTotal\n"
    . "     FROM venta INNER join articulo on venta.id_articulo=articulo.id_articulo \n"
    . "     INNER JOIN operacion ON venta.id_operacion =operacion.id_operacion\n"
    . "      INNER JOIN unidadmedida on unidadmedida.id_unidad=articulo.id_unidad\n"
    . " WHERE operacion.fecha='".$hoy."' "
    . " GROUP BY articulo.id_articulo;";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function informeArtVentaGeneralEF($fI,$fF)
{    
    $bd = obtenerConexion();
  
    $sql = "SELECT articulo.id_articulo as id ,articulo.nombre, CONCAT(articulo.presentacion, ' - ', unidadmedida.umedida) as tamanio, venta.precioI as precio_inicial ,\n"
    . "     venta.precioF as precio_final, sum(venta.cantidad) as totalc, SUM(venta.precioI*venta.cantidad) as totalInicial,\n"
    . "     sum(venta.precioF*venta.cantidad) as totalFinal, SUM((venta.precioF*venta.cantidad)-(venta.precioI*venta.cantidad)) as GananciaTotal\n"
    . "     FROM venta INNER join articulo on venta.id_articulo=articulo.id_articulo \n"
    . "     INNER JOIN operacion ON venta.id_operacion =operacion.id_operacion\n"
    . "        INNER JOIN unidadmedida on unidadmedida.id_unidad=articulo.id_unidad\n"
    . "    WHERE operacion.fecha BETWEEN '".$fI."' AND '".$fF."' GROUP BY articulo.id_articulo \n"
    . "    ORDER BY totalc DESC";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function informeArtVentaMes($mes,$anio)
{    
    $bd = obtenerConexion();
  
    $sql = "SELECT articulo.id_articulo as id ,articulo.nombre, CONCAT(articulo.presentacion, ' - ', unidadmedida.umedida) as tamanio, venta.precioI as precio_inicial ,\n"
    . "     venta.precioF as precio_final, sum(venta.cantidad) as totalc, SUM(venta.precioI*venta.cantidad) as totalInicial,\n"
    . "     sum(venta.precioF*venta.cantidad) as totalFinal, SUM((venta.precioF*venta.cantidad)-(venta.precioI*venta.cantidad)) as GananciaTotal\n"
    . "     FROM venta INNER join articulo on venta.id_articulo=articulo.id_articulo \n"
    . "     INNER JOIN operacion ON venta.id_operacion =operacion.id_operacion\n"
    . "        INNER JOIN unidadmedida on unidadmedida.id_unidad=articulo.id_unidad\n"
    . "    WHERE MONTH(operacion.fecha) ='".$mes."' AND YEAR(operacion.fecha) ='".$anio."' GROUP BY articulo.id_articulo \n"
    . "    ORDER BY totalc DESC";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function informeArtVentaGeneral($fecha,$articulo)
{  
    $sql="SELECT articulo.id_articulo as id,articulo.nombre,concat(articulo.presentacion, \" - \", unidadmedida.umedida) as tamanio, precio_inicial ,\n"
    . "     precio_final , sum(venta.cantidad) as totalc, SUM(precio_inicial*venta.cantidad) as totalInicial,\n"
    . "     sum(precio_final*venta.cantidad) as totalFinal, SUM((precio_final*venta.cantidad)-(precio_inicial*venta.cantidad)) as GananciaTotal\n"
    . "     FROM venta INNER join articulo on venta.id_articulo=articulo.id_articulo \n"
    . "     INNER JOIN operacion ON venta.id_operacion =operacion.id_operacion\n"
    . "     INNER JOIN unidadmedida on unidadmedida.id_unidad=articulo.id_unidad\n"
     . "WHERE ". $fecha ." or " .$articulo . ""
    . " GROUP BY articulo.id_articulo;";
    $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function arqueoEfectivo()
{  
    $hoy=date('Y-m-d');
    $turno=$_SESSION["turno"];
    $sql = "SELECT SUM(`venta`) as v FROM `operacion` INNER JOIN tipoventa ON operacion.id_tipoVenta=tipoventa.id_tipoventa "
        ."WHERE operacion.id_tipoVenta=1 AND operacion.fecha='".$hoy."' AND operacion.turno= ".$turno;
    
        $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function arqueotarjeta()
{  
    $hoy=date('Y-m-d');
    $turno=$_SESSION["turno"];
    $sql = "SELECT SUM(`venta`) as v FROM `operacion` INNER JOIN tipoventa ON operacion.id_tipoVenta=tipoventa.id_tipoventa "
        ."WHERE operacion.id_tipoVenta=2 AND operacion.fecha='".$hoy."' AND operacion.turno= ".$turno;
        $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function arqueocCorrinete()
{  
    $hoy=date('Y-m-d');
    $turno=$_SESSION["turno"];
    $sql = "SELECT SUM(`venta`) as v FROM `operacion` INNER JOIN tipoventa ON operacion.id_tipoVenta=tipoventa.id_tipoventa "
        ."WHERE operacion.id_tipoVenta=3 AND operacion.fecha='".$hoy."' AND operacion.turno= ".$turno;
    
        $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function arqueoCanje()
{  
    $hoy=date('Y-m-d');
    $turno=$_SESSION["turno"];
    $sql = "SELECT SUM(`venta`) as v FROM `operacion` INNER JOIN tipoventa ON operacion.id_tipoVenta=tipoventa.id_tipoventa "
        ."WHERE operacion.id_tipoVenta=4 AND operacion.fecha='".$hoy."' AND operacion.turno= ".$turno;
    
        $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}function arqueototal()
{  
    $hoy=date('Y-m-d');
    $turno=$_SESSION["turno"];
    $sql = "SELECT SUM(`venta`) as v FROM `operacion` INNER JOIN tipoventa ON operacion.id_tipoVenta=tipoventa.id_tipoventa "
        ."WHERE operacion.fecha='".$hoy."' AND operacion.turno= ".$turno;
    
        $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

function arqueoArticulo()
{  
    $hoy=date('Y-m-d');
    $turno=$_SESSION["turno"];
   
    $sql = "SELECT articulo.id_articulo, articulo.nombre, sum(venta.cantidad) as c, venta.precioI as precio_inicial, venta.precioF as precio_final,sum((venta.cantidad*venta.precioF)-(venta.cantidad*venta.precioI)) as g FROM operacion INNER JOIN" 
    ." venta ON operacion.id_operacion=venta.id_operacion INNER JOIN articulo ON articulo.id_articulo=venta.id_articulo \n"
    ." WHERE operacion.fecha='".$hoy."' AND operacion.turno= ".$turno .""
    ." GROUP BY articulo.id_articulo;";  
        $bd = obtenerConexion();
   
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function arqueoPagocC()
{  
    $hoy=date('Y-m-d');
    $turno=$_SESSION["turno"];
    $sql = "SELECT SUM(monto) as p FROM cuentacorriente\n"  
          ." WHERE fecha='".$hoy."' AND id_turno= ".$turno ." AND ". "operacion=0" ;
    //." GROUP BY articulo.id_articulo;";  
        $bd = obtenerConexion();
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}

?>