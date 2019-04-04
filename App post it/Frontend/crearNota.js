function crearNota() {
    var btn = document.createElement("DIV");
    btn.className = 'draggable';
    btn.innerHTML = document.getElementById('content').value;
    btn.style.position = "absolute";
    btn.style.left = '0px';
    btn.style.top = '0px';
    document.body.appendChild(btn);
    limpiar();
  }

  function limpiar(){
      document.getElementById('content').value = "";
  }