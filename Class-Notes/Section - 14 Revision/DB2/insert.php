<?php
include "connection.php";

if(isset($_POST['name'])) {

	if(!$_POST['id'])
		$_POST['id'] = 0;

	$sql = "INSERT INTO `Employee` (`id`, `name`, `salary`) 
	VALUES ('$_POST[id]', '$_POST[name]', '$_POST[salary]')";
	$db->query($sql);
	print $sql;
	print "<br>INSERTED!!!";
}
?>
<H1>Insert Employee</H1>

<FORM METHOD = POST>
<TABLE >
	<TR>
		<TD>ID</TD>
		<TD><INPUT TYPE = NUMBER NAME = "id" PLACEHOLDER = "Leave Blank for AutoIncrement"></TD>
	</TR>
	<TR>
		<TD>Name</TD>
		<TD><INPUT TYPE = TEXT NAME = "name" required></TD>
	</TR>
	<TR>
		<TD>Salary</TD>
		<TD><INPUT TYPE = NUMBER NAME = "salary" ></TD>
	</TR>
	<TR>
		<TD></TD>
		<TD><INPUT TYPE = SUBMIT VALUE = "Insert"></TD>
	</TR>
</TABLE>
</FORM>

	<HR>
	<A HREF = "index.php">Cancel/Go Back</A>