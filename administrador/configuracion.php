<?php
$archivo =  "configuracion.ini";
$contenido = parse_ini_file($archivo, true);

// usuarios del sistema
$usuario_sis=  $contenido["login"]["usuario"];
$clave_sis = $contenido["login"]["clave"];
$token_sis = $contenido["login"]["token"];

?>