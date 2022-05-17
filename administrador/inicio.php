<?php include("template/cabecera.php");  ?>


<div class="jumbotron"  style = background-color: white;>
    <h1 class="display-3">Editar contenido</h1>
    <hr class="my-2">
    <?php 
/* Establecer la ruta al archivo ini. */
$filepath = 'configuracion.ini';

/* Comprobando si el formulario ha sido enviado. Si lo tiene, tomará los datos del formulario y los pasará
a la función update_ini_file. */
if($_POST){
	$data = $_POST;
	//actualizar archivo ini, función de llamada
	update_ini_file($data, $filepath);
}

//esta es la función que actualizará su archivo ini


/**
* Toma una serie de datos y los escribe en un archivo ini.
esta es la función que actualizará 
*
* @param data Los datos para escribir en el archivo.
* @param filepath La ruta al archivo ini.
*
* @return el número de bytes escritos en el archivo, o FALSO en caso de falla.
*/

	function update_ini_file($data, $filepath) { 
		$content = ""; 
		
		
// analiza el archivo ini para obtener las secciones
// analizar el archivo ini utilizando la función PHP parse_ini_file() predeterminada 
		
		$parsed_ini = parse_ini_file($filepath, true);
		
		foreach($data as $section=>$values){
			//añadir la sección
			$content .= "[".$section."]\n"; 
			//añadir los valores
			foreach($values as $key=>$value){
				$content .= $key."=".$value."\n"; 
			}
		}
		
		/*  escribir en él archivo */
		if (!$handle = fopen($filepath, 'w')) { 
			return false; 
		}

		$success = fwrite($handle, $content);
		fclose($handle); 

		return $success; 
	}
?>
<?php 

// analizar el archivo ini utilizando la función PHP parse_ini_file() predeterminada
$parsed_ini = parse_ini_file($filepath, true);

?>

<form action="" method="post">
	<?php 

	foreach($parsed_ini as $section=>$values){
        echo '<div class="form-floating mb-3">';
		echo "<h3>$section</h3>";
		//mantener la sección como texto oculto para que podamos actualizar una vez que se envíe el formulario
		echo "<input type='hidden' value='$section' name='$section' />";
		// imprime todos los demás valores como campos de entrada, por lo que puede editar.
       //note el atributo name='' que tiene tanto la sección como la clave
		foreach($values as $key=>$value){
			echo "<p>".$key.": <input class='form-control' type='text' name='{$section}[$key]' value='$value' />"."</p>";
		}
		echo "<br>";
        echo '</div>';
	}

	?>
	<input type="submit" value="Update INI" />
</form>
    
</div>

<?php include("template/pie.php");  ?>