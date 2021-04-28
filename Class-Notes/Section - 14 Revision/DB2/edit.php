<?php
include "connection.php";

if(isset($_POST['id'])) {

	$sql = "UPDATE `Employee` SET `id` = '$_POST[id]', `name` = '$_POST[name]', `salary` = '$_POST[salary]' WHERE `id` = '$_POST[old_id]' ";
	$db->query($sql);
	header("Location: index.php");
}

$sql = "SELECT * FROM `Employee` WHERE `id` = '$_GET[edit_id]' ";
$res = $db->query($sql);
$row = $res->fetch_assoc();
?>
<H1>Edit Employee</H1>

<FORM METHOD = POST>

<INPUT TYPE = HIDDEN NAME = "old_id" required value = "<?=$row['id']?>">
<TABLE >
	<TR>
		<TD>ID</TD>
		<TD><INPUT TYPE = NUMBER NAME = "id" required value = "<?=$row['id']?>"></TD>
	</TR>
	<TR>
		<TD>Name</TD>
		<TD><INPUT TYPE = TEXT NAME = "name" required value = "<?=$row['name']?>"></TD>
	</TR>
	<TR>
		<TD>Salary</TD>
		<TD><INPUT TYPE = NUMBER NAME = "salary" value = "<?php print $row['salary'];?>"></TD>
	</TR>
	<TR>
		<TD></TD>
		<TD><INPUT TYPE = SUBMIT VALUE = "Edit"></TD>
	</TR>
</TABLE>
</FORM>

	<HR>
	<A HREF = "index.php">Cancel/Go Back</A>