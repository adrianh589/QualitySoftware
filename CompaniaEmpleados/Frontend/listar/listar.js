function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           document.getElementById("tabla").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "../../Backend/listar/listar.php",true);
        xhttp.send();
  }
  setInterval(loadDoc,100);
