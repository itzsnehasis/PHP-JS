<HTML>
	<HEAD>
		<SCRIPT>
		function Ajax(keyword) 
		{
			var aj = new XMLHttpRequest();
			aj.onreadystatechange = function()
			{
				if(aj.readyState==4) 
				{
				document.getElementById("myDiv").innerHTML = aj.responseText;
				}
			}
			aj.open("POST", "random.php?keyword="+keyword, false); 
			aj.send(null); 
		}
		</SCRIPT>
	</HEAD>
	<BODY>
		<CENTER>
		<H1>Ajax Example 2</H1>
		<INPUT TYPE = TEXT NAME = "keywords" PLACEHOLDER = "Enter Keywords" ONKEYUP = "Ajax(this.value)" AUTOCOMPLETE = "OFF">
		<DIV ID = "myDiv"></DIV>
		</CENTER>
	</BODY>
</HTML>
<?php ///I am random.php
if(strlen($_GET['keyword'])<1)
	die("Kuch to daalo!");
$db = new MySQLi("localhost", "root", NULL, "Company");
$sql = "SELECT * FROM `JobSeekers` WHERE `fullname` LIKE '%$_GET[keyword]%' OR `city` LIKE '%$_GET[keyword]%' LIMIT 0,10";
$res = $db->query($sql);
while($row = $res->fetch_object()) {
	print "<HR>$row->id, ".setColor($row->fullname).", ".setColor($row->city);
}
function setColor($str)
{
	$k = $_GET['keyword'];
	return str_ireplace($k, "<SPAN STYLE = \"background: pink;\">$k</SPAN>", $str); 
}

