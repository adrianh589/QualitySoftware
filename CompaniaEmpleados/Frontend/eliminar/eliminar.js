//Function AJAX
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  var cedula = document.getElementById("cedula").value;

        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           document.getElementById("respuesta").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "../../Backend/eliminar/eliminar.php?cedula=" + cedula, true);
        xhttp.send();
  }

  //Function with AJAX to call listInformation
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
