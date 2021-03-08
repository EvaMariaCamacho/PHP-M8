<?php

require_once 'db.php';

class taula {
    
    function list() {
      $connection = new Connection; 
      $mysql = $connection->create(); // conexión
      
      $result = $mysql->query("SELECT * FROM compra");
      $taules = $result->fetch_all(MYSQLI_ASSOC);
      
      $connection->close($mysql); // cerramos conexión
      
      return $taules;
    }
    
    function create($request) {
      $connection = new Connection;
     
      $mysql = $connection->create();//crear conexión
      
      $result = $mysql->query("INSERT INTO compra (nombre,precio,cantidad) values ('{$request['nombre']}','{$request['precio']}','{$request['cantidad']}')");
      
      $connection->close($mysql); // cerramos conexión
      
      
      return $result;  
    }
    
    function show($id) {
      $connection = new Connection;
      
      // Crear la conexión
      $mysql = $connection->create();
      
      $result = $mysql->query("SELECT * FROM compra WHERE id = $id");
      $taules = $result->fetch_assoc();
      
      // Cerrar conexión
      $connection->close($mysql);
      
      return $taules;
        
    }
    
    function update($request) {
      $connection = new Connection;
      
      $mysql = $connection->create(); //crear conexión
      $sql="UPDATE compra SET nombre = '{$request['nombre']}', precio = {$request['precio']},cantidad = {$request['cantidad']} WHERE id = {$request['id']}";
      $result = $mysql->query($sql);
      var_dump($sql);
      
    // Cerrar conexión
      $connection->close($mysql);
      
      return $result;
        
    }
    
    function delete($id) {
      $connection = new Connection;
      $mysql = $connection->create(); // conexión
      
      $result = $mysql->query("DELETE FROM compra WHERE id = $id");
      
      $connection->close($mysql); // cerramos conexión
      
      return $result;
         
    }
}
