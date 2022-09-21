<?php
//include_once("header.php");
function proveedoresButton(){

      echo '<a class="btn btn-success btn-sm" href="proveedorCargar.php">Nuevo &nbsp;</a>&nbsp';
      echo '<a class="btn btn-secondary btn-sm" href="proveedorModificar.php">Editar&nbsp;</a>&nbsp';
      echo '<a class="btn btn-danger btn-sm" href="proveedorEliminar.php">Eliminar&nbsp;</a>&nbsp';
}

function clienteButton(){

echo '<a class="btn btn-success btn-sm" href="clienteCargar.php">Nuevo&nbsp;</a>&nbsp';
echo '<a class="btn btn-secondary btn-sm" href="clienteModificar.php">Editar&nbsp;</a>&nbsp';
echo '<a class="btn btn-danger btn-sm" href="clienteEliminar.php">Eliminar&nbsp;</a>&nbsp';
}

function productosButton(){
echo '<a class="btn btn-success btn-sm" href="productoAgregar.php">&nbsp;Nuevo&nbsp;</a>&nbsp'
    .'<a class="btn btn-secondary btn-sm" href="productosEditar.php">&nbsp;Editar&nbsp;</a>&nbsp'
    .'<a class="btn btn-danger btn-sm" href="productosEliminar.php">&nbsp;Eliminar&nbsp;</a>&nbsp';
}
function stockButton(){
    echo '<a class="btn btn-secondary btn-sm" href="stockModificar.php">&nbsp;Modificar Stock &nbsp;</a>&nbsp'
        .'<a class="btn btn-secondary btn-sm" href="stockCambiarPrecio.php">&nbsp;Modificar Precio &nbsp;</a>&nbsp';
}
function categoriaButton(){

        echo '<a class="btn btn-success btn-sm" href="categoriaCargar.php">Nuevo&nbsp;</a>&nbsp;';
        echo '<a class="btn btn-secondary btn-sm" href="categoriaModificar.php">Editar&nbsp;</a>&nbsp';
        echo '<a class="btn btn-danger btn-sm" href="categoriaEliminar.php">Eliminar&nbsp;</a>&nbsp';
}

function appButton(){
    echo '<a class="btn btn-secondary btn-sm" href="ProductoAgregar.php">&nbsp;Agregar Producto &nbsp;</a>&nbsp'
    .'<a class="btn btn-secondary btn-sm" href="clienteCargar.php">&nbsp;Agregar Cliente &nbsp;</a>&nbsp'
    .'<a class="btn btn-primary btn-sm" href="app.php">&nbsp;Lista General &nbsp;</a>&nbsp' 
  .'<a class="btn btn-primary btn-sm" href="appSuelto.php">&nbsp;Lista De Sueltos &nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;'; 
}

function nuevoCliente(){
    echo '<a class="btn btn-success btn-sm" href="clienteCargar.php?x=venta">ingresar Nuevo Cliente&nbsp;</a>&nbsp';
}
function appInformeVenta(){
    echo '<a class="btn btn-success btn-sm" href="informe_Venta.php?inf=inf">&nbsp;Ventas &nbsp;</a>&nbsp'
    .'<a class="btn btn-success btn-sm" href="informe_Venta.php?inf=D">&nbsp;Venta Diaria &nbsp;</a>&nbsp'
    .'<a class="btn btn-success btn-sm" href="informe_Venta.php?inf=Ms">&nbsp;Venta Mensual &nbsp;</a>&nbsp'
    .'<a class="btn btn-success btn-sm" href="informe_Venta.php?inf=Gnr">&nbsp;Venta General &nbsp;</a>&nbsp';
  

}
function appInformeVentaArticulo(){
    echo '<a class="btn btn-success btn-sm" href="informe_ArtVentaTotal.php" >Ventas por Articulo</a>&nbsp'
    .'  <a class="btn btn-success btn-sm" href="informe_ArtVentaDiaria.php" >Venta Diaria por Articulo</a>&nbsp'
    .'  <a class="btn btn-success btn-sm" href="informe_ArtVentaMes.php" >Venta Mensual por Articulo</a>&nbsp'
    .'  <a class="btn btn-success btn-sm" href="informe_ArtVentaGeneral.php" >Venta Articulo Entre...</a>&nbsp';

}

function appInformeArticulo(){
    echo '<a class="btn btn-success btn-sm" href="informe_ArtVentaCliente.php?inf=inf">&nbsp;Ventas por Articulo &nbsp;</a>&nbsp'
    .'<a class="btn btn-success btn-sm" href="informe_ArtVentaCliente.php?inf=D">&nbsp;Venta Diaria por Articulo &nbsp;</a>&nbsp'
    .'<a class="btn btn-success btn-sm" href="informe_ArtVentaCliente.php?inf=Ms">&nbsp;Venta Mensual por Articulo &nbsp;</a>&nbsp'
    .'<a class="btn btn-success btn-sm" href="informe_ArtVentaCliente.php?inf=Gnr">&nbsp;Venta General de Articulo &nbsp;</a>&nbsp';
  

}
function appInformeArticuloVent(){
    echo '<a class="btn btn-success btn-sm" href="informe_ArtVentaTotal.php" >Ventas por Articulo</a>&nbsp'
    .'  <a class="btn btn-success btn-sm" href="informe_ArtVentaDiaria.php" >Venta Diaria por Articulo</a>&nbsp'
    .'  <a class="btn btn-success btn-sm" href="informe_ArtVentaMes.php" >Venta Mensual por Articulo</a>&nbsp'
    .'  <a class="btn btn-success btn-sm" href="informe_ArtVentaGeneral.php" >Venta Articulo Entre...</a>&nbsp';
  

}   