<?php
/* Checking if the session is empty and if it is, it redirects to salir.php. */
session_start();
if(empty($_SESSION['token'])){
	header('Location: salir.php');
  }
?>
