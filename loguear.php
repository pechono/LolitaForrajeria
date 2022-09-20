<?php
include_once"funciones.php";

if (!isset($_POST["usuario"]) && !isset($_POST["pass"]) && iseet(["turno"])) {
    exit("usuario o clave no registarda correctamente");
} else 
{
  $user=$_POST["usuario"];
  $pass=$_POST["pass"];
  $turno=$_POST["turno"];

  echo $user   ." =user " .$pass." =pass ". $turno  ." turno <br>" ;

      $usuarios=usuario();
      foreach ($usuarios as $u) 
      {
        
          if ($u->usuario==$user && $u->clave==$pass ) 
          {
           

            $_SESSION["turno"]=$turno; 
            $_SESSION["idUsuario"]=$u->id_usuario;
            echo $_SESSION["idUsuario"]   ." =user " .$pass." =pass ". $_SESSION["turno"]  ." turno " ;
            header("Location: app.php");
          }else
          {

          //echo "    no esta registrado como usuario";# code...
          }
      }
     
}
/*



  ?>