//ID to identify the cards
var cardID = 0;

//Function to edit an specified card
function editCard(selected) {
  console.log(selected);

  var x = document.getElementById("card-title" + selected);
  var y = document.getElementById("card-text" + selected);
  if (x.contentEditable == "true") {
    $("card-title" + selected).select();
    x.contentEditable = "false";
    y.contentEditable = "false";
  } else {
    
    x.contentEditable = "true";
    y.contentEditable = "true";
  }
}

//Function to create a new card
function createCard() {
  var div = document.createElement('div');

  div.innerHTML =
    '<div class="card text-white bg-dark mb-3 draggable" style="max-width: 18rem; min-width: 18rem;" id="card' + cardID + '">\
        <div class="card-header text-right" id="header" style="cursor: move; z-index: 10;">\
          <a href="#" class="material-icons" onclick="showHide(\''+ cardID + '\')">filter_list</a>\
          <a href="#" class="material-icons" onclick="deleteCard(\''+ cardID + '\')">close</a>\
        </div>\
          <div class="card-body" id="card-body'+ cardID + '">\
            <h5 class="card-title" id="card-title'+ cardID + '">Escribe el titulo de tu nota</h5>\
            <p class="card-text'+ cardID + '" id="card-text' + cardID + '">Escribe aqui el contenido de tu nota post it</p>\
            <a href="#" class="material-icons" onclick="editCard(\''+ cardID + '\')" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">edit</a>\
              <select class="form-control" float:left; margin-right: 10%;" onchange="changeColor(\''+ cardID + '\',value);">\
                  <option >Seleccion de color</option>\
                  <option value= "red">Rojo</option>\
                  <option value= "blue">Azul</option>\
                  <option value = "yellow">Amarillo</option>\
                  <option value = "black">Negro</option>\
                  <option value = "green">Verde</option>\
                  <option value = "white">Blanco</option>\
                  <option value = "light-blue">Azul claro</option>\
                  <option value = "gray">Gris</option>\
              </select>\
          </div>\
      </div>';
  document.getElementById('content').appendChild(div);

  //Draggable function
  $("#card"+ cardID).draggable({ handle:'#header'});

  cardID++;
}

//Function to delete a specified card
function deleteCard(selected) {
  document.getElementById("card" + selected).remove();
}

//Function to apply the body color
function loadBodyColor() {
  document.getElementById("bodyColor").setAttribute("style", "background-image: linear-gradient(to right, #051937, #004d7a, #008793, #00bf72, #a8eb12);");
}

//Function to change the color of the cards
function changeColor(selected, color) {
  var card = document.getElementById("card" + selected);

  switch (color) {
    case 'blue':
      card.className = "card bg-primary text-white";
      break;
    case 'green':
      card.className = "card bg-success text-white";
      break;
    case 'white':
      card.className = "card bg-light text-dark";
      break;
    case 'light-blue':
      card.className = "card bg-info text-white";
      break;
    case 'yellow':
      card.className = "card bg-warning text-white";
      break;
    case 'red':
      card.className = "card bg-danger text-white";
      break;
    case 'gray':
      card.className = "card bg-secondary text-white";
      break;
    case 'black':
      card.className = "card text-white bg-dark mb-3";
      break;

  }
}

//Function to hide/show a card
function showHide(selected) {
  var x = document.getElementById("card-body" + selected);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}