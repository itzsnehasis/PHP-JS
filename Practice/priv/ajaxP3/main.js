function loadDoc(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4){
            document.getElementById('mydiv').innerHTML = xhttp.responseText;
            setTimeout("loadDoc()", 1000);
        }
    }
    xhttp.open("POST", "./rand.php", true);
    xhttp.send(null);
}