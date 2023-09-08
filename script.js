function validate() {
    var filledFieldsCount = 0
    id = ['first-name', 'last-name', 'email']
    for (var i = 0; i < 3; i++) {
      a = document.getElementById(id[i])
      if (a.value != '') {
        filledFieldsCount++;
      }
    }
    // if (filledFieldsCount < 3) {
    if (false) {
      document.getElementById('result').innerHTML = 'Please fill mandatory fields';
    } else {
      // window.alert("Please fill mandatory fields")
      document.getElementById('result').innerHTML = 'Form submitted';
      document.querySelector('#form-box form').submit();
    }
  }