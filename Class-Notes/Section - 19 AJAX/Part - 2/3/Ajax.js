
function Ajax()
{
	var aj = new XMLHttpRequest();
	aj.onreadystatechange = function()
	{
	if(aj.readyState==4) 
	  {
		document.getElementById('myDiv').innerHTML = aj.responseText;
		setTimeout("Ajax()",1000);
	  }
	}
	aj.open("POST", "rand.php", true); 
	aj.send(null);  
}