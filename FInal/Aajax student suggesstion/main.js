function Ajax(){
    var name = document.getElementById('name').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState==4){
            document.getElementById('mydiv').innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("POST", "student.php?name="+name, false);
    xhttp.send(null);
}