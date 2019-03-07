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
        <script type="text/javascript" src="pagos.js"></script>
      	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.html">Pagos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Realizar pagos/Modificar<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="mostrarPagos.php">Ver pagos realizados</a>
    </div>
  </div>
</nav>

    <select id="elegirMes" class="form-control">
      <option value="Enero">Enero</option>
      <option value="Febrero">Febrero</option>
      <option value="Marzo">Marzo</option>
      <option value="Abril">Abril</option>
      <option value="Mayo">Mayo</option>
      <option value="Junio">Junio</option>
      <option value="Julio">Julio</option>
      <option value="Agosto">Agosto</option>
      <option value="Septiembre">Septiembre</option>
      <option value="Octubre">Octubre</option>
      <option value="Noviembre">Noviembre</option>
      <option value="Diciembre">Diciembre</option>
    </select>

<form >


  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Cedula</th>
        <th scope="col">% a asingnar</th>
        <th scope="col">Ventas realizadas en este mes</th>
        <th scope="col">Comision</th>
        <th scope="col">Pagar</th>
      </tr>
    </thead>
    <tbody>

<?php
        while ($row = mysqli_fetch_array($result)){
          echo '<tr class="'.$row['id'].'">';
          echo '<th scope="row">'.$row['id'].'</th>';
          echo '<td>'.$row['Nombres'].'</td>';
          echo '<td>'.$row['Apellidos'].'</td>';
          echo '<td>'.$row['Numero_Documento'].'</td>';
          echo '<td><input type="number" class="form-control" id="porcentaje'.$row['id'].'"></td>';
          echo '<td><input type="number" class="form-control" id="ventas'.$row['id'].'"></td>';
          echo '<td id="'.$row['id'].'"></td>';
          echo '<td > <button type="button" class="btn btn-success" onclick="loadDoc('.$row['id'].','.$row['id'].','.$row['id'].','.$row['Numero_Documento'].')">Realizar/modificar pago</button></td>';
          echo "</tr>";
        }
  ?>
    </tbody>
  </table>
 </form>

   </body>
 </html>
