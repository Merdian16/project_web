<?php 

session_start();


unset($_SESSION['username']);
session_destroy();
echo '<script type="text/javascript">
    alert("You have successfully logged out")
    window.location = "login/index.php"
</script>';




?>