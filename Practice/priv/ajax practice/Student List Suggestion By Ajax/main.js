function Ajax(keyword){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState==4){
            document.getElementById('mydiv').innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("POST", "student.php?keyword="+keyword, false);
    xhttp.send(null);
}