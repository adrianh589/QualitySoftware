//Function AJAX
function loadDoc(nombres,apellidos,cc) {
  var xhttp = new XMLHttpRequest();

  var respuesta = confirm('Realmente desea despedir al empleado '+nombres+' '+apellidos+' de la compañia?');

  if (respuesta == true) {
    alert('El empleado '+nombres+' '+apellidos+' ha sido despedido!!!');
    xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("rta").innerHTML = this.responseText;
             location.reload();
            }
          };
          xhttp.open("GET", "../../Backend/eliminar/eliminar.php?nombres="+nombres +"&apellidos="+apellidos+"&cc="+cc,true);
          xhttp.send();

  }

  }
