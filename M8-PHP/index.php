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
            $taula = new taula;
            
            $taules = $taula->list();            
        ?>
       
        <div class="container p-4">
            <div class="row">
                
                      <div class="col-md-8">
                          <h2 class="text-center">TAULA COMPRA</h2><br>
                    <table class="table table-striped">
                       <thead class="thead-dark">
                         <tr>
                           <th scope="col">NReg</th>
                           <th scope="col">Productos</th>
                           <th scope="col">Precios</th>
                           <th scope="col">Cantidad</th>
                           <th scope="col">Modificar</th>
                           <th scope="col">Eliminar</th>
                         </tr>
                       </thead>
                       <tbody>
                          <?php foreach($taules as $taula): ?>
                         <tr>
                           <th scope="row"><?php echo $taula['id'] ?></th>
                           <td><?php echo $taula['nombre'] ?></td>
                           <td><?php echo $taula['precio'] ?></td>
                           <td><?php echo $taula['cantidad'] ?></td>
                           <td>
                               <a class="btn btn-secondary" href="edit.php?id=<?php echo $taula['id'] ?>"><i class="fas fa-pen-alt"></i></a>
                           </td>
                           <td>
                               <a class="btn btn-danger" href="request/deleteRequest.php?id=<?php echo $taula['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                           </td>
                         </tr>
                        <?php endforeach; ?>
                       </tbody>
                     </table>
                          
                </div>
                <div class="col-md-4">
                    <!-- formulario -->
                     <h2 class="text-center">INCLUIR COMPRA</h2><br>
                    <form method="POST" action="request/createRequest.php">
                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <textarea class="form-control" id="description" rows="3" name="nombre"></textarea>
                        </div>
                          <div class="form-group">
                          <label for="nombre">Precios</label>
                          <input class="form-control" id="description" rows="3" name="precio"></input>
                        </div>
                         <div class="form-group">
                          <label for="nombre">Cantidad</label>
                          <input class="form-control" id="description" rows="3" name="cantidad"></input>
                        </div>
                       <button type="submit" class="btn btn-primary">Añadir</button>
                      </form>
                </div>
            </div>
        </div>       
        <?php include 'includes/footer.php' ?>
    </body>
</html>
