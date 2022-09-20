<?php include_once('header.php'); ?>
<section class="contenido wrapper ">
  <div class="container position-relative card" >
  <div class="card-header">
         <h3>Estado de Cuenta General</h3>
        </div>
    <table class="table table-striped table-hover">
      <thead>
         <tr>
          <th scope="col">id</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">Monto (+Ingreso, -Deuda)</th>
          <th scope="col">Fecha </th>
          <th scope="col">Usurio </th>

          
          
    		</tr>
      </thead>    
      <tbody>
        
      <?php 
      $estados = estadosCuentasMovimientos();
      foreach ($estados as $estado) 
      { ?>
        <tr>
          <th scope="row"><?php echo $estado->id_cliente ?></th>
          <td><?php echo $estado->apellido ?></td>
          <td><?php echo $estado->nombre ?></td>
          <td><?php echo -1*$estado->monto ?></td> 
          <td><?php echo $estado->fecha ?></td>
          <td><?php echo $estado->apUser .", ".$estado->nomUser; ?></td>
          
              
                
        </tr>
      <?php 
      
     } ?>        
        </tbody>
    </table>
  </div>
</section>
<?php include_once "footer.php"; ?>
