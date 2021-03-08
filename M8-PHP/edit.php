<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <?php include 'includes/header.php' ?>
    <body>
        <?php
            require_once 'controllers/taula.php';
            require_once 'controllers/db.php';

            $connection = new Connection; 
            $mysql = $connection->create(); // conexión
            
                  
            
            $taules = new taula;
            
            
            $id=filter_input(INPUT_GET, 'id');
                        
            // Show task
            $request = $taules->show($id);  
            
        ?>
        
        <div class="container p-4">
            <!-- formulario -->
            <form method="POST" action="request/editRequest.php?id=<?php echo $request['id']; ?>">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <textarea class="form-control" id="description" name="nombre"><?php echo $request['nombre']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                  <textarea class="form-control" id="description" name="precio"><?php echo $request['precio']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="cantidad">Cantidad</label>
                  <textarea class="form-control" id="description" name="cantidad"><?php echo $request['cantidad']; ?></textarea>
                </div>

                  <button type="submit" class="btn btn-primary">Modificar</button>
              </form>
        </div>
               
        <?php include 'includes/footer.php' ?>
    </body>
</html>
