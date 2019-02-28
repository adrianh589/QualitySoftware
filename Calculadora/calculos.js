function loadDoc() {
  var xhttp = new XMLHttpRequest();
  var prueba = document.getElementById("calculos").value;
  var calculo = prueba.replace("+","%2B");//Se reemplaza el + por su codificacion correcta
  xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           document.getElementById("calculos").value = this.responseText;
          }
        };
        xhttp.open("GET", "http://api.mathjs.org/v4/?expr="+calculo,true);
        xhttp.send();
}

function escribirNumero1(){
  document.getElementById("calculos").value += "1";
}

function escribirNumero2(){
  document.getElementById("calculos").value += "2";
}

function escribirNumero3(){
  document.getElementById("calculos").value += "3";
}

function escribirNumero4(){
  document.getElementById("calculos").value += "4";
}

function escribirNumero5(){
  document.getElementById("calculos").value += "5";
}

function escribirNumero6(){
  document.getElementById("calculos").value += "6";
}

function escribirNumero7(){
  document.getElementById("calculos").value += "7";
}

function escribirNumero8(){
  document.getElementById("calculos").value += "8";
}

function escribirNumero9(){
  document.getElementById("calculos").value += "9";
}

function escribirNumero0(){
  document.getElementById("calculos").value += "0";
}

function escribirNumeromas(){
  document.getElementById("calculos").value += "+";
}

function escribirNumeromenos(){
  document.getElementById("calculos").value += "-";
}

function escribirNumeromult(){
  document.getElementById("calculos").value += "*";
}

function escribirNumerodiv(){
  document.getElementById("calculos").value += "/";
}

function limpiar(){
  document.getElementById("calculos").value = "";
}
