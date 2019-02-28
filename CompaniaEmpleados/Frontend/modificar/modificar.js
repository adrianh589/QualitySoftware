//Funcion AJAX
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  var cedula = document.getElementById("cedula").value;
  var campoModificar = document.getElementById("campoModificar").value;
  var infoAmodificar = document.getElementById("infoAmodificar").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("respuesta").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../../Backend/modificar/modificar.php?cedula="+cedula+"&campoModificar="+campoModificar+"&infoAmodificar="+infoAmodificar, true);
  xhttp.send();
}

//Funcion AJAX para desplegar la tabla de empleados
function list() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           document.getElementById("tabla").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "../../Backend/listar/listar.php",true);
        xhttp.send();
  }
  setInterval(list,100);
