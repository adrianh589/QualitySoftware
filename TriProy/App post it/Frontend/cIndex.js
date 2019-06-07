//***************************************
//**Local Storage********************* */
//************************************ */

var cards = JSON.parse(localStorage.getItem('cards'));
var temporalArray=[];

if(cards == null){
  cards = [];
}

//Function to load cards in local storage
function loadLocal(){
  for (let index = 0; index < cards.length; index++) {
    var div = document.createElement('div');
    div.innerHTML = cards[index];
    document.getElementById('content').appendChild(div);
  }
}

//***************************************
//**Cards***************************** */
//************************************ */

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
    `<div style="max-width: 18rem; min-width: 18rem; background-color: white;" id="card${cardID}" class="card">
        <div class="card-header text-right" id="header" style="cursor: move; z-index: 10;">
          <input type="color" id="favcolor${cardID}" onchange="changeColorCard(${cardID})" value="#ffffff">
          <a href="#" class="material-icons" onclick="showHide(${cardID})">filter_list</a>
          <a href="#" class="material-icons" onclick="deleteCard(${cardID})">close</a>
        </div>
          <div class="card-body" id="card-body${cardID}">
            <h5 class="card-title" id="card-title${cardID}">Escribe el titulo de tu nota</h5>
            <p class="card-text${cardID}" id="card-text${cardID}">Escribe aqui el contenido de tu nota post it</p>
            <input type="color" id="favcolorText${cardID}" onchange="changeColorLetterCard(${cardID})" value="#000000">
            <a href="#" class="material-icons" onclick="editCard(${cardID})" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">edit</a>\
          </div>
      </div>`;
  document.getElementById('content').appendChild(div);

  //Draggable function
  $("#card"+ cardID).draggable({ handle:'#header'});

  cardID++;
  
  //Save cards in the local Storage
  var convert = div.outerHTML;
  cards.push(convert);
  window.localStorage.setItem('cards', JSON.stringify(cards));
}

//Function to change the color of the letter of the cards
function changeColorLetterCard(selected) {
  var color = document.getElementById("favcolorText" + selected).value;
  document.getElementById("card-title" + selected).style.color = color;
  document.getElementById("card-text" + selected).style.color = color;
  console.log(document.getElementById("card-title" + selected).style);
}

//Function to change the color of the cards
function changeColorCard(selected) {
  var color = document.getElementById("favcolor" + selected).value;
  document.getElementById("card" + selected).style.backgroundColor=color;
  console.log(document.getElementById("card" + selected).style)
}

//Function to delete a specified card
function deleteCard(selected) {
  document.getElementById("card" + selected).remove();
}

//Function to apply the body color
function loadBodyColor() {
  document.getElementById("bodyColor").setAttribute("style", "background-image: linear-gradient(to right, #051937, #004d7a, #008793, #00bf72, #a8eb12);");
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
