<HTML>
	<HEAD>
		<SCRIPT>

		function Ajax() 
		{
			var aj = new XMLHttpRequest();

			aj.onreadystatechange = function()
			{
				if(aj.readyState==4) 
				{
				document.getElementById("myDiv").innerHTML = aj.responseText;
				setTimeout("Ajax()", 100);
				}
			}

			aj.open("POST", "random.php", false); 
			aj.send(null); 
		}

		</SCRIPT>
	</HEAD>

	<BODY ONLOAD = "Ajax()">
		<CENTER>
		<H1>Ajax Example 2</H1>
		<DIV ID = "myDiv"></DIV>
		</CENTER>
	</BODY>
</HTML>


