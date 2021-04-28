<?php
include "connection.php";
include "links.php"; 
if(isset($_GET['msg'])==2)
{
	echo "Logout Successful!";
}

if(isset($_POST['reg']))
{
	
			$sql = "INSERT INTO `student` (`id`,`name`,`phone`,`address`,`email`,`password`) VALUES ('','$_POST[name]','$_POST[phone]','$_POST[add]','$_POST[email]','$_POST[pass]')";
			$db->query($sql);
			header("location:login.php");
		
}
?>

<h1>Welcome To Our Websites</h1>
<center>
<h2>NEW USER?<br>Create New Account</h2>

<form method = "Post" action = "">
<table border = "1">
<tr>
	<th>NAME</th>
	<td><input type = "text" name = "name"  required></td>
</tr>
<tr>
	<th>ADDRESS</th>
	<td><textarea name = "add"></textarea></td>
</tr>
<tr>
	<th>PHONE</th>
	<td><input type = "number" name = "phone" required></td>
</tr>
<tr>
	<th>EMAIL</th>
	<td><input type = "email" name = "email" required></td>
</tr>
<tr>
	<th>PASSWORD</th>
	<td><input type = "password" name = "pass" required></td>
</tr>
<tr>	
	<td colspan = 2 align = center><input type = "submit" name = "reg" value = "Register"></td>
</tr>
</table>
</form>



</center>
