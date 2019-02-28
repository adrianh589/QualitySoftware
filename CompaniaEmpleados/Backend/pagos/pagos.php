<?php
//Se importa la clase crearDB para crear la base de datos si njo existe y asu vez su conexion
require_once '../registrar/crearDB.php';

//traemos la cedula del empleados
$cedula = $_POST['cc'];
$vendido = $_POST['monto'];

//Traemos el porcentaje del empleado seleccionado
$traerPorcentajeEmpleado=mysqli_query($conexion,"SELECT `Porcentaje` FROM `empleados`
                                                 WHERE `Numero_Documento` = $cedula");

//Query para traer el nombre del empleado
$nombreEmpleado=mysqli_query($conexion,"SELECT `Nombres`,`Apellidos` FROM `empleados`
                                        WHERE `Numero_Documento` = $cedula;");

//Convertimos las variables traidas de la base de datos en variables que reconozca php
$porcentajeConveritido=mysqli_fetch_array($traerPorcentajeEmpleado);
$nombresConvertidos=mysqli_fetch_array($nombreEmpleado);

var_dump($nombresConvertidos);

if ($traerPorcentajeEmpleado===0||$traerPorcentajeEmpleado===NULL) {//Si el empleado no tiene porcentae
  echo "<script>alert('Debe asignarle un porcentaje a este empleado')</script>";
} else if(!$traerPorcentajeEmpleado){//Si no se ejecuto el query correctamente
  echo "<script>alert('Hubo un error, talvez el usuario no existe en la base de datos')</script>";
} else if($traerPorcentajeEmpleado){//Si tiene un porcentaje asignado
  $paraPagar=$porcentajeConveritido["Porcentaje"]/100;//Se convierte el porcentaje en decimales para convertir

  $montoPagado=$vendido*$paraPagar;//Monto pagado al empleados

  echo "<p>El empleado  $nombresConvertidos[Nombres] $nombresConvertidos[Apellidos] con ID = $cedula el cual vendio: $ $vendido
   pesos, se le ha pagado un monto de = $montoPagado puesto que su porcentaje fue de:
   % $porcentajeConveritido[Porcentaje])</p>";
}
