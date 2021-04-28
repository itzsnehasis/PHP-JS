function Ajax(){
    var aj = new XMLHttpRequest();

    aj.onreadystatechange = function(){
        if(aj.readyState == 4){
            document.getElementById("mydiv").innerHTML = aj.responseText;
            setTimeout("Ajax()", 1000);
        }
    }
    aj.open("POST", "rand.php", false);
    aj.send(null);
}