darkmode = false;
function mode(){
    var cir = document.getElementById('box');

    if(darkmode == false){
        document.body.style.backgroundColor = 'black';
        cir.style.backgroundColor           = 'red'; 
        darkmode                            =  true;
    }

    else{
        document.body.style.backgroundColor = 'white';
        cir.style.backgroundColor           = 'black';
        darkmode                            =  false;
    }
}