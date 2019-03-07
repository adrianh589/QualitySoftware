<?php
//Conexion con la base de datos
require_once('../../Backend/registrar/crearDB.php');

$porcentajeF=$_GET['porcentajeF'];
$ventaElegida=$_GET['ventaElegida'];
$id=$_GET['id'];
$mesElegido=$_GET['mesElegido'];
$cc=$_GET['cc'];

$porcentajeDef=$porcentajeF/100;
$comision=$ventaElegida*$porcentajeDef;

$sql="INSERT INTO `pagosventas` (`id`, `Mes`, `Porcentaje`, `Vendido`, `Total_Pagado`)
      VALUES ('$cc', '$mesElegido', '$porcentajeF', '$ventaElegida', '$comision')";

$result=mysqli_query($conexion,$sql);

//En caso de equivocacion
if($result){
  echo '$'.$comision;
}else{
  echo "Pago del mes $mesElegido actualizado";

  $sql="UPDATE `pagosventas` SET `Vendido` = '$ventaElegida', `Porcentaje` = $porcentajeF, `Total_pagado` = $comision
        WHERE `pagosventas`.`id` = $cc AND `pagosventas`.`Mes` = '$mesElegido';";

  $result=mysqli_query($conexion,$sql);
}
