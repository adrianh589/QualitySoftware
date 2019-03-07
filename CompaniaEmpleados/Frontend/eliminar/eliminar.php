<?php
  require_once('../../Backend/registrar/crearDB.php');
  $sql = "SELECT * FROM empleados";
  $result = mysqli_query($conexion,$sql);
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Seccion de pagos/ventas</title>
      <link rel="stylesheet" href="css/estilos.css">
      	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
        <script type="text/javascript" src="eliminar.js"></script>
      	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
    </head>
    <body>

      <!--PrincipalTitle-->
      <div class="p-3 mb-2 bg-dark text-white"><h1 id="tituloPrincipal">Sección de despedir empleados</h1></div>
      <!---->

  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">Nombres</th>
				<th scope="col">Apellidos</th>
        <th scope="col">Tipo Doc.</th>
        <th scope="col">Num. Doc.</th>
        <th scope="col">Fecha Naci.</th>
        <th scope="col">Nacionalidad</th>
        <th scope="col">Despedir?</th>
      </tr>
    </thead>
    <tbody>

<?php
        $coma = "'";
        while ($row = mysqli_fetch_array($result)){
          echo '<tr>';
          echo '<td>'.$row['Nombres'].'</td>';
          echo '<td>'.$row['Apellidos'].'</td>';
					echo '<td>'.$row['Tipo_Documento'].'</td>';
          echo '<td>'.$row['Numero_Documento'].'</td>';
          echo '<td>'.$row['Fecha_Nacimiento'].'</td>';
          echo '<td>'.$row['Nacionalidad'].'</td>';
          echo '<td > <button type="button" class="btn btn-danger" onclick="loadDoc('. $coma. $row['Nombres'].$coma  .','.$coma.$row['Apellidos'].$coma.','.$row['Numero_Documento'].')">Despedir empleado</button></td>';
          echo "</tr>";
        }
  ?>
</tbody>
  </table>

	<label id="rta"></label>

   </body>
 </html>
