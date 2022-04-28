<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="background-image: url('\images\admin.jpg');">

<div class="container" ><br>
<?php $url="http://".$_SERVER['HTTP_HOST']."/wifipiedra" ?>
<a class="btn btn-outline-secondary" href="<?php echo $url; ?>" role="button">Volver a la Pagina</a>

<div class="row">
<div class="col-md-4">


</div>

    <div class="col-md-4">
    <br><br><br>
    
    

    <div class="card" style="background-color: #7DC2C7;">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">

        <form id="contactForm" method="POST" action="procesar_login.php" >
            <div class = "form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" data-sb-validations="required"  >
            </div><br>

            <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" class="form-control" id="clave" name="clave" >
            </div><br>
           

            <button type="submit" class="btn btn-outline-light" style="margin-left: 53px;">Ingresar a administrador</button>




            </form>

        


          
            
           
        </div>
    </div>

    </div>
</div>

</div>
    
</body>
</html>


