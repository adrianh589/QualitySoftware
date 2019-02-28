<?php
//Conectamos con la base de datos
require_once '../registrar/crearDB.php';

//Variables para traer los datos de los campos
$porcentajeAsignado=$_GET['porcentajeAsignado'];
$cedula=$_GET['cedula'];

//Query para poder modificar los campos
$sql = "UPDATE `empleados`
    			SET  `Porcentaje` = '$porcentajeAsignado'
					WHERE `empleados`.`Numero_Documento` = $cedula ;";

          //Se ejecuta el query
        $result = mysqli_query($conexion,$sql);
