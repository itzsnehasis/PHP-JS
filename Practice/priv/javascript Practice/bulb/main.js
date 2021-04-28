function change(){
    var gf       = document.getElementById('gf');
    var myswitch = document.getElementById('switch');

    if(gf.value == "Ila"){
        gf.value       = "Sweta";
        myswitch.value = "Change to Ila"; 
    }

    else{
        gf.value       = "Ila";
        myswitch.value = "Change to sweta"; 
    }
}