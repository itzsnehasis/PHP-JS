var i =  1;
function loadImg(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4){
            document.getElementById('img').innerHTML  = xhttp.responseText;
            if(i < 11)
                i++;
            if(i == 11)
                i = 1;
            setTimeout("loadImg()",10);
        }
    }
    xhttp.open("POST", "./image.php?i="+i, true);
    xhttp.send(null);
}