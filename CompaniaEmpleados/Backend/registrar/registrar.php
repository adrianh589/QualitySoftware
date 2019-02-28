<?php
//Se importa la clase crearDB para crear la base de datos si njo existe y asu vez su conexion
require_once 'crearDB.php';

//Variables que se han traido de los campos de registro
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['numeroDocumento'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$nacionalidad = $_POST['nacionalidad'];

$sql=mysqli_query($conexion,"INSERT INTO `empleados` VALUES (NULL,'$nombres','$apellidos','$email','$fechaNacimiento','$tipoDocumento','$numeroDocumento','$telefono','$direccion','$nacionalidad',NULL);");

//Se le dice al usario que el empleado ha sido registrado con exito
if($sql){
  echo "<script> alert('Usuario registrado con exito!!!') </script>";
}else{
  echo "<script> alert('Este usuario ya existe en la base de datos!') </script>";
}

//Volver al menu principal
echo "<form action='../../Frontend/index.html'>
        <input type='submit' value='Volver al menu principal' />
      </form>";
