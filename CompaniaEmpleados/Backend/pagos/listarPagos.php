<?php
//Conexion con la base de datos
require_once('../registrar/crearDB.php');

$elegirMes=$_GET['elegirMes'];

$sql="SELECT * FROM `pagosventas` WHERE `Mes` = '$elegirMes';";

$result=mysqli_query($conexion,$sql);

$hayEmpleadosPagados=mysqli_num_rows($result);

if($hayEmpleadosPagados===0){

echo '<div class="p-3 mb-2 bg-danger text-white">No se encontraron pagos en el mes de <b>'.$elegirMes.'</div>';

 }else{

  echo '
  <div class="p-3 mb-2 bg-success text-white">Pagos encontrados en el mes de <b>'.$elegirMes.'</div>
  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Mes</th>
        <th scope="col">Porcentaje</th>
        <th scope="col">Vendido</th>
        <th scope="col">Total Pagado</th>
      </tr>
    </thead>
    <tbody>
  ';

        while ($row = mysqli_fetch_array($result)){

          echo '<td>'.$row[0].'</td>';
          echo '<td>'.$row[1].'</td>';
          echo '<td>'.$row[2].'%</td>';
          echo '<td>$'.$row[3].'</td>';
          echo '<td>$'.$row[4].'</td>';
          echo "</tr>";
        }

  echo '
    </tbody>
  </table>';
}
