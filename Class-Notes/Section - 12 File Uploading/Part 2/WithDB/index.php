<HTML>
	<BODY>
		<H1>File Upload</H1>
		<FORM METHOD = "POST" ACTION = "Upload.php" ENCTYPE = "MULTIPART/FORM-DATA">
		<BR>Your Image: <INPUT TYPE = "FILE" NAME = "myfile" >

		<BR>Image TITLE: <INPUT TYPE = "TEXT" NAME = "title" >

		<BR> <INPUT TYPE = "SUBMIT" VALUE = " Upload!!! ">
		</FORM>
	<HR>
	<?php
	
	$db = new MySQLi("localhost", "root", NULL, "1PM");
	$sql = "SELECT * FROM `Pictures`";
	$res = $db->query($sql);
	while($row = $res->fetch_array()) {

		print "<IMG SRC = \"$row[path]\" WIDTH = 100 STYLE = \"border: 1px solid silver; padding: 10px; margin: 20px;\"> ";
	}
	?>
	</BODY>
</HTML>