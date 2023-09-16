function validate() {
  var filledFieldsCount = 0;
  id = ["first-name", "last-name", "email"];
  for (var i = 0; i < 3; i++) {
    a = document.getElementById(id[i]);
    if (a.value != "") {
      filledFieldsCount++;
    }
  }
  if (filledFieldsCount < 3) {
    document.getElementById("form-box").opacity = 0.5;
    document.getElementById("result").visibility = visible;
    document.getElementById("result").innerHTML =
      "Please fill mandatory fields";
  } else {
    document.getElementById("result").visibility = visible;
    document.getElementById("result").innerHTML = "Form submitted";
    document.querySelector("#form-box form").submit();
  }
}
/*function charset(string) {
  let n = string.lenght;
  count = 0;
  for (let i=0; i<n; i++) {
    char = string[i];
    if ((char >= 65 & char <= 90) | (char >= 97 & char <= 122)){
      count++;
    }
    if (count == n) {
      return true;
    }
    else {
      return false;
    }
  }
}
function validate() {
  const name = document.forms[0].name.value;
  const age = document.forms[0].age.value;
  if (name != '' & charset(name)) {
    return true;
  }
  else{
    return false;
  }
}*/
