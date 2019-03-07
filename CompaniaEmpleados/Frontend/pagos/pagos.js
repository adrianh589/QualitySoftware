function loadDoc(porcentaje,ventas,id,cc) {
  var xhttp = new XMLHttpRequest();
  var fecha = document.getElementById("elegirMes").value;

  var porcentajeElegido = "porcentaje";
  porcentajeElegido += porcentaje;
  var porcentajeF = document.getElementById(porcentajeElegido).value;

  var ventaElegida = "ventas";
  ventaElegida += ventas;
  var ventaElegida = document.getElementById(ventaElegida).value;

  var mesElegido = document.getElementById("elegirMes").value;

  if (porcentajeF<=0 || porcentajeF>=100) {
    alert('introduzca un porcentaje entre 0 y 100');
  } else {
    xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById(id).innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "../../Backend/pagos/pagos2.php?porcentajeF="+porcentajeF+"&ventaElegida="+ventaElegida+"&id="+id+"&mesElegido="+mesElegido+"&cc="+cc,true);
          xhttp.send();
  }
  }


  function listarEmpleados(){
    var xhttp = new XMLHttpRequest();
    var elegirMes = document.getElementById('elegirMes').value;
    xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("table").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "../../Backend/pagos/listarPagos.php?elegirMes="+elegirMes,true);
          xhttp.send();
  }
