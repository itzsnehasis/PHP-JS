function Ajax(){
    var eid = document.f1.eid.value;
    var name = document.f1.name.value;
    var contact = document.f1.contact.value;
    var gender = document.f1.gender.value;
    var course = document.f1.course.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState==4){
            document.getElementById('mydiv').innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("POST", "editresponse.php?eid=" + eid +"&name=" + name + "&contact=" + contact + "&gender=" + gender + "&course=" + course, false);
    xhttp.send(null);
}