function loadDoc(){
  var data = new XMLHttpRequest();
  data.onreadystatechange = function(){
    if(data.readyState == 4) {
      document.getElementById('mydiv').innerHTML = data.responseText;
      setTimeout("loadDoc()", 1000);
    }
  }
  data.open("POST", "rand.php", true);
  data.send(null);
}
