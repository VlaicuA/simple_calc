var inputString = '';

function getValue(value) {
  inputString += value;
  console.log(inputString);
  document.getElementById("html_input").value = inputString;
}


function clearImput(){
  console.log('You pressed clear');
  inputString = '';
  document.getElementById("html_input").value = inputString; 
}

function backspace(){
  inputString = inputString.slice(0, -1)
  document.getElementById("html_input").value = inputString;
  console.log('You pressed <-');
  console.log(inputString);
}
