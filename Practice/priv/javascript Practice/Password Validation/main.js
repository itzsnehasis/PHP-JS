function verify(){
    /*

    1.Make It atleast 8 charecters.
    2.give atleast one number.
    3.give atleast one speacial charecter
    4.give atleast one capital.
    5.give stelast one small.

    */
    //condition 1
    var password = document.getElementById('password').value;
    
    if(password.length<8){
        alert('Give atleast 8 charecter');
        document.getElementById('password').focus();
        return false;
    }
    //condition 2
    var numberflag = false;
    for(i=0; i<password.length; i++){
        var ascii = password.charCodeAt(i);
        if(ascii>=48 && ascii<=57)
            numberflag = true;
    }

    if(numberflag == false){
        alert('Give atleast one number');
        document.getElementById('password').focus();
        return false;
    }
    //condition 3
    var specialFound = false;
    var speacialchar = ["!", "@", "#", "$", "%", "^", "&", "*"];
    for(i=0; i<password.length; i++){
        for(j=0;j<speacialchar.length; j++){
            if(password[i]==speacialchar[j])
                specialFound = true;
        }
    }

    if(specialFound==false){
        alert('Give atleast one specialcharecter');
        document.getElementById('password').focus();
        return false;
    }
    //condition 4

    var upperCaseFound = false;
    for(i=0; i<password.length; i++){
        var uppercase = password.charCodeAt(i);
        if(uppercase>=65 && uppercase<=90)
            upperCaseFound = true;
    }

    if(upperCaseFound==false){
        alert('Give atleast one Uppercase');
        document.getElementById('password').focus();
        return false;
    }
    //condition 5
    var lowerCaseFound = false;
    for(i=0; i<password.length; i++){
        var lowercase = password.charCodeAt(i);
        if(lowercase>=97 && lowercase<=122)
            lowerCaseFound = true;
    }

    if(lowerCaseFound==false){
        alert('Give atleast one lowercase');
        document.getElementById('password').focus();
        return false;
    }

    return true

}