<center>
<?php
    session_start();

    if(isset($_SESSION['userid'])){
        print "<a href = \"./logout.php\">Logout</a>"; 
    }
    else{
        print "<a href = \"./login.php\">Login</a>";
    }
?>
 || <a href = "profile.php">Profile</a>
</center>