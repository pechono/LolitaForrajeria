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
          <th scope="col">Monto Adeudado</th>
          
          
    		</tr>
      </thead>    
      <tbody>
         
      <?php 
      $estados = estadosCuentasGeneral();
      foreach ($estados as $estado) 
      { ?>
        <tr>
          <th scope="row"><?php echo $estado->id_cliente ?></th>
          <td><?php echo $estado->apellido ?></td>
          <td><?php echo $estado->nombre ?></td>
          <td><?php echo $estado->monto ?></td>
          
              
                
        </tr>
      <?php 
      
     } ?>        
        </tbody>
    </table>
  </div>
</section>
<?php include_once "footer.php"; ?>
