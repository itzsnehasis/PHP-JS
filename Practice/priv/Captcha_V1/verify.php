<?php
  if ($_POST['entcap'] == $_POST['name'])
    header("location: captchasuc.php");
  else
    header("location: index.php");
?>
