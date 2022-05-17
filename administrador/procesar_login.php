<?php 
session_start();
include("configuracion.php");
?>
<?php
//var_dump($_POST);
/* Comprobando si el nombre de usuario y la contraseña son correctos. Si lo son, establecerá el token de sesión en el
variable token_sis y redirigir a inicio.php. Si no son correctos, se redirigirá a
índice.php. */
if ( ($_POST['usuario']==$usuario_sis) && ($_POST['clave']==$clave_sis) ){
    $_SESSION['token']=$token_sis;
    header('Location:inicio.php');
   
}else{
    header('Location:index.php');
}

?>
