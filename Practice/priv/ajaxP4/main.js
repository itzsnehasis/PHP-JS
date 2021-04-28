function loadText(keyword){
    var xhttp   = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4){
            document.getElementById('text').innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("POST", "./database.php?keyword="+keyword, true);
    xhttp.send(null);
}
function loadDoc(){
    var xhttp   = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4){
            document.getElementById('text').innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("POST", "./database.php", true);
    xhttp.send(null);
}

