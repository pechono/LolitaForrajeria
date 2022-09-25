
                        <?php
$cadena="la web5 del pr9ogramador";
 
// Recorremos cada carácter de la cadena
$nro="";
for($i=0;$i<strlen($cadena);$i++)
{   if(is_numeric($cadena[$i])){
   $nro=$nro . strval($cadena[$i]);
}
	// Mostramos cada uno de los caracteres...
	// con $cadena[0] se muestra el primera caracter, [1], el segundo, etc...
	//echo "<br>".$cadena[$i];
}
echo intval($nro);
?>  