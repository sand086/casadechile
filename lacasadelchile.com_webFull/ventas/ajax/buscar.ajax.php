<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once "../modelos/conexion.php";

$valor = $_POST["valor"];

//$valor = "chile";

$stmt = Conexion::conectar()->prepare("SELECT * FROM productos WHERE nombre like '%$valor%' ");

//$stmt -> bindParam(":valor", $valor, PDO::PARAM_STR);

$stmt -> execute();

$valores = $stmt -> fetchAll();

echo json_encode($valores);