<HTML>
	<HEAD>
		<SCRIPT SRC = "genericAjax.js">
		</SCRIPT>
	</HEAD>
	<BODY>
		<CENTER>
		<H1>Ajax Example 2</H1>

		<INPUT TYPE = "TEXT" NAME = "keywords" PLACEHOLDER = "Search Products" SIZE = "40"
			   AUTOCOMPLETE = "OFF"
		       ONKEYUP = "GenericAjaxFunction('date.php?key='+this.value,'x',0);">

		<DIV ID = "x"></DIV>
		</CENTER>
	</BODY>
</HTML>