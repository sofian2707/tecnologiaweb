<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #F2E3D5;">

<?php $url="http://".$_SERVER['HTTP_HOST']."/wifipiedra" ?>


    <nav class="navbar navbar-expand-lg navbar-dark "  style="background-color: #026773; height:80px" >
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="inicio.php">Gestionar Contenido</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="gimagen.php">Gestionar Imagenes</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $url; ?>">Ver Pagina</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="salir.php">Salir</a>
            </li>
        </ul>
    </nav>


<div class="container-fluid" >

