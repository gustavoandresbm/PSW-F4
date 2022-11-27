$sql = "SELECT * FROM personas WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      ?>

      <div class="container">
  <h2>Actualización de clientes</h2>
  <form action="actualizar2.php" method="POST">
    <div class="form-group">
      <label>Codigo del producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['id'] ?> " id="id" placeholder="Ingrese codigo producto" name="id" readonly>
    </div>
    <div class="form-group">
      <label>Nombre del producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['nombreproducto'] ?> " id="nombreproducto" placeholder="Ingrese aquí nombre del producto" name="nombreproducto">
    </div>
    <div class="form-group">
      <label>Marca del producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['marcaprodcuto'] ?> " id="Marcaproducto" placeholder="Ingrese aquí la marca del producto" name="marcaproducto">
    </div>
    <div class="form-group">
      <label>precioproducto:</label>
      <input type="int" class="form-control" value=" <?php echo $row['precioproducto'] ?> " id="precoproducto" placeholder="Ingrese aquí el recio del producto" name="precioproducto">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
</div>

  <?php

    }


} else {



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../actualizarproducto.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "Esa persona no existe " . "<br>";
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../actualizarproducto.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


}

mysqli_close($conn);
?> 