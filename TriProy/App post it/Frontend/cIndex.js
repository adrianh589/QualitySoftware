function myFunction(selected) {
  var x = document.getElementById("card-title");
  var y = document.getElementById("card-text");
  if (x.contentEditable == "true") {
    x.contentEditable = "false";
    y.contentEditable = "false";
  } else {
    x.contentEditable = "true";
    y.contentEditable = "true";
  }
}

var cardID = 0;

function createCard(){
    var div = document.createElement('div');

    div.innerHTML =
        '<div class="card bg-secondary" style="width: 18rem;">\
          <div class="card-body id="card'+ cardID +'">\
            <h5 class="card-title" id="card-title">Titulo</h5>\
            <p class="card-text" id="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, corrupti iste magnam impedit expedita neque ullam sint labore hic accusamus molestiae, architecto sunt voluptas ratione consequatur iusto ab! Inventore, nesciunt?</p>\
            <a href="#" class="material-icons" onclick="myFunction()">edit</a>\
            <a href="#" class="material-icons" onclick="">color_lens</a>\
            <a href="#" class="material-icons" onclick="">close</a>\
          </div>\
        </div>';

    document.getElementById('content').appendChild(div);

    cardID++;
}