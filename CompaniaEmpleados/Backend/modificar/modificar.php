<?php
//Conectamos con la base de datos
require_once '../registrar/crearDB.php';

//Variables para traer los datos de los campos
$cedula=$_GET['cedula'];
$campoModificar=$_GET['campoModificar'];
$infoAmodificar=$_GET['infoAmodificar'];

//Query para poder modificar los campos
$sql = "UPDATE `empleados`
    			SET $campoModificar = '$infoAmodificar'
					WHERE `empleados`.`Numero_Documento` = $cedula ;";

//Se ejecuta el query
$result = mysqli_query($conexion,$sql);
