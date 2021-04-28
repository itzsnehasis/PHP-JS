function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mydiv").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "./ajax.txt", true);
  xhttp.send(null);
}
