function crearNota() {
    var btn = document.createElement("DIV");
    btn.className = 'draggable';
    btn.innerHTML = " Ejemplo para escribir una nota";
    btn.style.position = "absolute";
    btn.style.left = '0px';
    btn.style.top = '0px';
    document.body.appendChild(btn);
  }