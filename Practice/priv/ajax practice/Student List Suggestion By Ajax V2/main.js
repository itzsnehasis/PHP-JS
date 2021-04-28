function Ajax(){
    var studentName = document.getElementById('studentName').value;
    var xhttp       = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState==4){
            document.getElementById('mydiv').innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("POST", "student.php?studentName="+studentName, false);
    xhttp.send(null);
}

function cursor(){
    document.getElementById('studentName').focus();
}