<?php 
session_start();
include("configuracion.php");
?>
<?php


//var_dump($_POST);
if ( ($_POST['usuario']==$usuario_sis) && ($_POST['clave']==$clave_sis) ){
    header('Location:inicio.php');
   
}else{
    header('Location:index.php');
}

?>
