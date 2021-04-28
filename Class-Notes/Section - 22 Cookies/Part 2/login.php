<?php
    @session_start();
    include "links.php";
	include "connection.php";
	if(isset($_GET['msg'])==1)
	{	
		echo "Please Login First!";
	}

	if(isset($_POST['log']))
	{
		$email 		= $_POST['email'];
		$password 	= $_POST['pass'];

		$sql = "SELECT * FROM `student` WHERE `email` = '$email' AND `password` = '$password'";
		$res = $db->query($sql);
		$num = $res->num_rows;
		//print $num;

		if($num>0) {
			$row = $res->fetch_array();


			$_SESSION['userid']   = $row['id'];
			$_SESSION['username'] = $row['name'];

			if(isset($_POST['rem'])) {
				$time = time()+60*60;

				setcookie("email", $email,$time);
			}

			header("location:profile.php");


		}
		else {
			print "Invalid Details";
		}

	}
?>

<center>
  <h2>Login Here</h2>
   <form method="post" action="">
	<table width="350" height="175" cellpadding="10" border="1">
   <tr>
	<th>Email</th>
	<td><input type="text" name="email" value = "<?php print $_COOKIE['email']?>"></td>
   </tr>
   <tr>
	<th>Password</th>
	<td><input type="password" name="pass"></td>
   </tr>
   <tr>
	
	<td colspan = "2" >Remember Me<input type="checkbox" name="rem"></td>
   </tr>
   <tr>
	<td colspan="2" align="center"><input type="submit" name="log" value="Login"></td>
   </tr>
   </table>
   </form>
   <a href = "index.php">Back</a>
</center>

