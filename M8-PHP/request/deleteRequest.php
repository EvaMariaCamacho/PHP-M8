<?php

require_once '../controllers/taula.php';

$id = $_GET['id'];

$taula = new taula();
$result = $taula->delete($id);

if ($result) {
    header("Location: ../index.php");
} else {
    echo "Error BD: Transaction error";
}
