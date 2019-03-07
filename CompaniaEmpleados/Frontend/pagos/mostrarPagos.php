<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="pagos.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
      <script type="text/javascript" src="pagos.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
    <title>Ver empleados</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.html">Pagos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link " href="pagos.php">Realizar pagos/Modificar</a>
            <a class="nav-item nav-link active" href="#">Ver pagos realizados<span class="sr-only">(current)</span></a>
          </div>
        </div>
  </nav>

  <select id="elegirMes" class="form-control">
    <option >Seleccione Mes</option>
    <option value="Enero" onclick="listarEmpleados()">Enero</option>
    <option value="Febrero" onclick="listarEmpleados()">Febrero</option>
    <option value="Marzo" onclick="listarEmpleados()">Marzo</option>
    <option value="Abril" onclick="listarEmpleados()">Abril</option>
    <option value="Mayo" onclick="listarEmpleados()">Mayo</option>
    <option value="Junio" onclick="listarEmpleados()">Junio</option>
    <option value="Julio" onclick="listarEmpleados()">Julio</option>
    <option value="Agosto" onclick="listarEmpleados()">Agosto</option>
    <option value="Septiembre" onclick="listarEmpleados()">Septiembre</option>
    <option value="Octubre" onclick="listarEmpleados()">Octubre</option>
    <option value="Noviembre" onclick="listarEmpleados()">Noviembre</option>
    <option value="Diciembre" onclick="listarEmpleados()">Diciembre</option>
  </select>

<div id="table">

</div>


  </body>
</html>
