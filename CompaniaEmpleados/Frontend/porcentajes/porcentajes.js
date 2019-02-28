//Funcion AJAX
function loadDoc() {
  //Se valida que el valor ingresado sea entre 0 y 100
  var introducido = document.getElementById("porcentajeAsignado").value;
if (introducido >=0 && introducido <=100 ) {
  var xhttp = new XMLHttpRequest();
  var porcentajeAsignado = document.getElementById("porcentajeAsignado").value;
  var cedula = document.getElementById("cedula").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("respuesta").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../../Backend/porcentajes/porcentajes.php?porcentajeAsignado="+porcentajeAsignado+"&cedula="+cedula, true);
  xhttp.send();
  }else {//Si el valor no es correcto, se manda el siguinte alert
    alert('Porfavor introduzca un valor entre 0 y 100');
  }
}

//Funcion para desplegar la tabla de empleados
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
