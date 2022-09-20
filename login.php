<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" align="center">
    <form action="loguear.php" method="post">
        <div><input type="text"name="usuario" placeholder="Ingresar Usuario"> </div>
        <br>
        <div><input type="password"name="pass" placeholder="Ingresar Clave"><div>

        <br>
        <select name="turno"  >
        <option value="1" selected>Turno Mañana</option>
        <option value="2">Turno Tarde</option>
        </select>
        <button class="button is-success is-large" >
                                <i class="fa fa-check">Ingresar</i>
            </button>
    </form>  
    </div>
</body>
</html>