function GenericAjaxFunction(queryString,outputDiv,recallInterval) {

var aj = new XMLHttpRequest();

aj.onreadystatechange = function()
{
	if(aj.readyState==4) 
	{
	document.getElementById(outputDiv).innerHTML = aj.responseText;
	
	//setTimeout("GenericAjaxFunction('date.php','timer',100)", recallInterval);
	if(recallInterval>0)
		setTimeout("GenericAjaxFunction('"+queryString+"','"+outputDiv+"',"+recallInterval+")", recallInterval);
	}
}

aj.open("POST", queryString ,true); 
aj.send(null); 
}