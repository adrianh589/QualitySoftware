document.getElementById("buttonCalculate").addEventListener("click", oddEven);
document.getElementById("inputNumber").addEventListener("click", quitMessage);

function oddEven() {
    var number = document.getElementById("inputNumber").value;
    var result;

    if (number%2==0) {
        result = "Este numero ES par";
    } else {
        result = "Este numero NO es par"
    }
  document.getElementById("showResult").innerHTML = result;
}

function quitMessage(){
    document.getElementById("showResult").innerHTML = "";
}