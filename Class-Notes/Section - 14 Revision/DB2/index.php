<?php
include "connection.php";

if(isset($_GET['del_id'])) {
	$sql = "DELETE FROM `Employee` WHERE `id` = '$_GET[del_id]' ";
	$db->query($sql);
	print "<DIV STYLE = \"border: 1px solid blue; background: #CCF; padding: 10px;\">Delete Successful	</DIV>";
}
?>
<H1>Employee</H1>

<TABLE CELLPADDING = 10 BGCOLOR = #999>
	<TR>
		<TD>ID</TD>
		<TD>Name</TD>
		<TD>Salary</TD>
		<TD>Edit</TD>
		<TD>Delete</TD>
	</TR>
<?php
$sql = "SELECT * FROM `Employee` ";
$res = $db->query($sql);

//$res->fetch_row will fetch like $row[0], $row[1]
//$res->fetch_assoc will fetch like $row[id], $row[name]
//$res->fetch_array will give both $row[0], $row[name]
while($row = $res->fetch_assoc()) {
	print "
	<TR BGCOLOR = #FFF>
		<TD>$row[id]</TD>
		<TD>$row[name]</TD>
		<TD>$row[salary]</TD>
		<TD><a href = edit.php?edit_id=$row[id]>Edit</a></TD>
		<TD><a href = index.php?del_id=$row[id]>Delete</a></TD>
	</TR>
	";
}
?>
	</TABLE>
	
	<HR>
	<A HREF = "insert.php">Insert</A>