<?php
//conectamos con la base de datos
require_once '../registrar/crearDB.php';

$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];
$cc=$_GET['cc'];

//Query para borrar un empleado
$sql = "DELETE FROM `empleados` WHERE `empleados`.`Numero_Documento` = $cc";

//Se ejecuta el query
$result = mysqli_query($conexion,$sql);
