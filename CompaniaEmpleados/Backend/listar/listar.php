<?php
//Con este archivo nos conectamos con la base de datos
require_once '../registrar/crearDB.php';

$sql = "SELECT * FROM empleados";

$result = mysqli_query($conexion,$sql);

echo '<table class="table table-sm table-dark">
      <thead>
        <tr class="bg-danger">
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Email</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Tipo de documento</th>
          <th scope="col">Numero Documento</th>
          <th scope="col">Tel</th>
          <th scope="col">Dir</th>
          <th scope="col">Nacionalidad</th>
          <th scope="col">% asignado</th>
        </tr>
        <tbody>';

//Array asociativo
while ($row = mysqli_fetch_array($result)){
  echo '<tr>
    <th scope="row">'.$row[0].'</th>
    <td class="bg-primary">'.$row[1].'</td>
    <td>'.$row[2].'</td>
    <td class="bg-primary">'.$row[3].'</td>
    <td>'.$row[4].'</td>
    <td class="bg-primary">'.$row[5].'</td>
    <td>'.$row[6].'</td>
    <td class="bg-primary">'.$row[7].'</td>
    <td>'.$row[8].'</td>
    <td class="bg-primary">'.$row[9].'</td>
    <td>'.$row[10].'</td>
  </tr>';
}
echo "</thead>
</tbody>
</table>";

?>
