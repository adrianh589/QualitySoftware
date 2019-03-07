<?php
//Variable para crear la base de datos en caso de que no exista
$baseDatos="compania";
$crearDB="CREATE DATABASE IF NOT EXISTS `$baseDatos`;";

//Variable para crear la tabla de la base de datos en caso de que no exista
$crearTabla="CREATE TABLE IF NOT EXISTS `compania`.`empleados` ( `id` INT(255) NOT NULL AUTO_INCREMENT
, `Nombres` VARCHAR(50) NOT NULL , `Apellidos` VARCHAR(50) NOT NULL ,
`Email` VARCHAR(100) NOT NULL , `Fecha_Nacimiento` DATE NOT NULL ,
`Tipo_Documento` VARCHAR(100) NOT NULL , `Numero_Documento` INT(100) NOT
NULL , `Telefono` BIGINT(100) NOT NULL , `Direccion` VARCHAR(155) NOT NULL ,
`Nacionalidad` VARCHAR(10) NOT NULL , `Porcentaje` INT NULL , PRIMARY KEY
(`id`),  UNIQUE (`Numero_Documento`)) ENGINE = InnoDB;";

$crearTabla2= "CREATE TABLE `compania`.`pagosventas` ( `id` BIGINT(155) NOT NULL ,
 `Mes` VARCHAR(155) NOT NULL , `Porcentaje` TINYINT(155) NOT NULL , `Vendido` BIGINT(255) NOT NULL ,
  `Total_Pagado` BIGINT(255) NOT NULL , UNIQUE (`id`, `Mes`)) ENGINE = InnoDB;";

//Conexion con la base de datos
$conexion = mysqli_connect("localhost", "root", "") or die ("Error con el servidor con la base de datos");
//Ejecutamos el query para crear la base de datos en caso de que no exista
mysqli_query($conexion,$crearDB);
//Ejecutar el query para crear la tabla en caso de que no exista
mysqli_query($conexion,$crearTabla);
//Ejecutar el query para crear la tabla de pagos en caso de que no exista
mysqli_query($conexion,$crearTabla2);

//Seleccionamos la base de datos a la que nos queremos conectar
$bd = mysqli_select_db($conexion, $baseDatos) or die ("Error conexion al conectarse a la base de datos");
