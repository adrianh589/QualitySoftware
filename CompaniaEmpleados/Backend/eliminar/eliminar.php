<?php
//conectamos con la base de datos
require_once '../registrar/crearDB.php';

//Variable para almacenar la cedula del empleado a borrar
$eliminarEmpleado = $_GET['cedula'];

//Query para borrar un empleado
$sql = "DELETE FROM `empleados` WHERE `empleados`.`Numero_Documento` = $eliminarEmpleado";

//Se ejecuta el query
$result = mysqli_query($conexion,$sql);
