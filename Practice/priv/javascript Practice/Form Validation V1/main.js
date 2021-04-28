function verify(){
    var name = document.getElementById('name').value;
    var age = document.getElementById('age').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    //verify process;

    //name
    if(name==''){
        alert('Please Enter Your Name');
        document.getElementById('name').focus();
        return false;
    }
    //age   
    if(age==''){
        alert('Please Enter Your Age');
        document.getElementById('age').focus();
        return false;
    }

    if(isNaN(age)){
        alert('Please Enter Valid age');
        document.getElementById('age').focus();
        return false;
    }
    //email     
    if(email==''){
        alert('Please Enter Your Email');
        document.getElementById('email').focus();
        return false;
    }
    //contact
    if(contact==''){
        alert('Please Enter Your contact');
        document.getElementById('contact').focus();
        return false;
    }

    if(isNaN(contact)){
        alert('Please Enter Valid contact');
        document.getElementById('contact').focus();
        return false;
    }

    if(contact.length!=10){
        alert('please Enter Valid Contact');
        document.getElementById('contact').focus();
        return false;
    }

    return true;
}