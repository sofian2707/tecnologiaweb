<?php
$archivo =  "configuracion.ini";
$contenido = parse_ini_file($archivo, true);

// usuarios del sistema
$usuario_sis=  $contenido["login"]["usuario"];
$clave_sis = $contenido["login"]["clave"];


// nav
$item1=  $contenido["Menu"]["item1"];
$item2 = $contenido["Menu"]["item2"];
$item3 = $contenido["Menu"]["item3"];
$item4 = $contenido["Menu"]["item4"];


//Inicio
$tituloprincipal=  $contenido["Inicio"]["tituloprincipal"];
$descripcion=  $contenido["Inicio"]["descripcion"];

//Destacado
$title1=  $contenido["Destacado"]["title1"];
$descripcion1=  $contenido["Destacado"]["descripcion1"];
$title2=  $contenido["Destacado"]["title2"];
$descripcion2=  $contenido["Destacado"]["descripcion2"];
$title3=  $contenido["Destacado"]["title3"];
$descripcion3=  $contenido["Destacado"]["descripcion3"];



//Planes 
$nombreplan1=  $contenido["Plan1"]["nombreplan1"];
$precioplan1=  $contenido["Plan1"]["precioplan1"];
$caracteristicasA=  $contenido["Plan1"]["caracteristicasA"];
$caracteristicasB=  $contenido["Plan1"]["caracteristicasB"];
$caracteristicasC=  $contenido["Plan1"]["caracteristicasC"];

$nombreplan2=  $contenido["Plan2"]["nombreplan2"];
$precioplan2=  $contenido["Plan2"]["precioplan2"];
$caracteristicasD=  $contenido["Plan2"]["caracteristicasD"];
$caracteristicasE=  $contenido["Plan2"]["caracteristicasE"];
$caracteristicasF=  $contenido["Plan2"]["caracteristicasF"];
$caracteristicasG=  $contenido["Plan2"]["caracteristicasG"];

$nombreplan3=  $contenido["Plan3"]["nombreplan3"];
$precioplan3=  $contenido["Plan3"]["precioplan3"];
$caracteristicasH=  $contenido["Plan3"]["caracteristicasH"];
$caracteristicasI=  $contenido["Plan3"]["caracteristicasI"];
$caracteristicasJ=  $contenido["Plan3"]["caracteristicasJ"];
$caracteristicasK=  $contenido["Plan3"]["caracteristicasK"];

$nombreplan4=  $contenido["Plan4"]["nombreplan4"];
$precioplan4=  $contenido["Plan4"]["precioplan4"];
$caracteristicasL=  $contenido["Plan4"]["caracteristicasL"];
$caracteristicasM=  $contenido["Plan4"]["caracteristicasM"];
$caracteristicasN=  $contenido["Plan4"]["caracteristicasN"];
$caracteristicasO=  $contenido["Plan4"]["caracteristicasO"];



//Contacto
$numerotelefono=  $contenido["Contacto"]["numerotelefono"];
$correo=  $contenido["Contacto"]["correo"];

?>