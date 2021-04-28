<HTML>
	<BODY>
		<H1>File Upload</H1>
		<FORM METHOD = "POST" ACTION = "Upload.php" ENCTYPE = "MULTIPART/FORM-DATA">
		Your Image: <INPUT TYPE = "FILE" NAME = "myfile" >
		<BR> <INPUT TYPE = "SUBMIT" VALUE = " Upload!!! ">
		</FORM>
	<HR>
	<?php
	$handle = opendir("./files");
	while($file=readdir($handle)) {

		if($file == "." || $file == "..")
			continue;

		print "<IMG SRC = \"files/$file\" WIDTH = 100 STYLE = \"border: 1px solid silver; padding: 10px; margin: 20px;\"> ";
	}
	?>
	</BODY>
</HTML>