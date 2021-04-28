function verify(){
    var name    = document.getElementById('form1').name.value;
    var contact = document.getElementById('form1').contact.value;
    var age     = document.getElementById('form1').age.value;
    //name validation
    if(name==''){
      alert('plz enter a name');
      document.getElementById('form1').name.focus();
      return false  
    }

    //contact validation
    if(contact==''){
        alert('plz enter a Contact');
        document.getElementById('form1').contact.focus();
        return false;  
    }

    if(isNaN(contact)){
        alert('plz enter a valid contact');
        document.getElementById('form1').contact.focus();
        return false;
    }

    if(contact.length<=10){
        alert('plz enter a valid contact');
        document.getElementById('form1').contact.focus();
        return false;
    }

    var numbervalidflag = true;
    for(i=0; i<contact.length; i++){
        var number = contact.charCodeAt(i);
        if(number>=65 && number<=90 && number>=97 && number<=122)
            numbervalidflag = false;

    }   
    //age validation
    if(age==''){
        alert('plz enter a Age');
        document.getElementById('form1').age.focus();
        return false;  
    }
    return true;
}