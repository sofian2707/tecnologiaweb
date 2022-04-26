<?php include("template/cabecera.php");  ?>


<div class="jumbotron">
    <h1 class="display-3">Editar contenido</h1>
    <hr class="my-2">
    <?php 

//put the file path here
$filepath = 'configuracion.ini';

//after the form submit
if($_POST){
	$data = $_POST;
	//update ini file, call function
	update_ini_file($data, $filepath);
}

//this is the function going to update your ini file
	function update_ini_file($data, $filepath) { 
		$content = ""; 
		
		//parse the ini file to get the sections
		//parse the ini file using default parse_ini_file() PHP function
		$parsed_ini = parse_ini_file($filepath, true);
		
		foreach($data as $section=>$values){
			//append the section 
			$content .= "[".$section."]\n"; 
			//append the values
			foreach($values as $key=>$value){
				$content .= $key."=".$value."\n"; 
			}
		}
		
		//write it into file
		if (!$handle = fopen($filepath, 'w')) { 
			return false; 
		}

		$success = fwrite($handle, $content);
		fclose($handle); 

		return $success; 
	}
?>
<?php 

//parse the ini file using default parse_ini_file() PHP function
$parsed_ini = parse_ini_file($filepath, true);

?>

<form action="" method="post">
	<?php 

	foreach($parsed_ini as $section=>$values){
        echo '<div class="form-floating mb-3">';
		echo "<h3>$section</h3>";
		//keep the section as hidden text so we can update once the form submitted
		echo "<input type='hidden' value='$section' name='$section' />";
		//print all other values as input fields, so can edit. 
		//note the name='' attribute it has both section and key
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