
<?php include("session.php");?>
<?php include("configuracion.php");?>
<?php include("template/cabecera.php");  ?>


<div class="jumbotron">
    <h1 class="display-3">Subir imagenes</h1>
    <hr class="my-2">

    <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>


  <form id="contactForm" method="POST" action="upload.php" enctype="multipart/form-data">
  <div class="input-group mb-3">
                                <input class="form-control"  type="file" name="uploadedFile" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
    <input type="submit" name="uploadBtn" value="Upload" />
  </form>



    
</div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
 <script src="js/scripts.js"></script>







<?php include("template/pie.php");  ?>