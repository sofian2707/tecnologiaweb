<?php
/* Destroying the session and redirecting the user to the index page. */
session_start();
session_destroy();
header('location: index.php');
?>
