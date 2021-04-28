<center>


<?php
@session_start();
	    if(isset($_SESSION['userid'])){
			echo "<a href=\"logout.php\">LOGOUT</a>&nbsp; | &nbsp;";
        }
		else{
            echo"<a href=\"login.php\">LOGIN</a>&nbsp; | &nbsp";
		}
	?>
<!-- <a href = "login.php">LOGIN</a>&nbsp; | &nbsp; -->
<a href = "profile.php">PROFILE</a>
<hr>

</center>