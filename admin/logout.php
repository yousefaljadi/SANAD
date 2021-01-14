<?php include 'functions/init.php' ?>
<?php confirm_login(); ?>
<?php
session_unset();
session_destroy();
Redirect_to("login.php");

?>
