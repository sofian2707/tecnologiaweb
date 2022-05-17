<?php include("session.php");?>
<?php
$message = ''; 
/* * El código anterior está cargando un archivo al servidor. */
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
   
   /* Obtener los detalles del archivo subido. */

    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // desinfectar el nombre del archivo
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    
// comprobar si el archivo tiene una de las siguientes extensiones
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

   /* Comprobando si la extensión del archivo está en la matriz de extensiones de archivo permitidas. */
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directorio en el que se moverá el archivo cargado
      $uploadFileDir = './uploaded_files/';
      $dest_path = $uploadFileDir . $newFileName;

     
/* Mover el archivo al directorio. */
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='Se subio El archivo En forma Correcta. con el siguiente nombre:' .$newFileName.'<br>'.
        '<img src="./uploaded_files/'.$newFileName.'"  height="100px" alt=""/>';
        
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
/* Redirecting the user to the gimagen.php page. */
$_SESSION['message'] = $message;
header("Location: gimagen.php");