<?php

require_once '../controllers/taula.php';
require_once '../controllers/db.php';

$connection = new Connection; 
$mysql = $connection->create(); // conexión


$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$request = [
    "nombre" => $nombre,
    "precio" => $precio,
    "cantidad"=>$cantidad,
];

$taules = new taula();
$result = $taules->create($request);

if ($result) {
    header("Location: ../index.php");
} else {
    echo "Error BD: Transaction error";
}
