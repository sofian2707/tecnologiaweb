
<!DOCTYPE html>
<html lang="en">

<body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!"><?php echo $titulo;?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
               


            <div class="container px-lg-5">        
        <?php 

        
//https://www.onlineclassnotes.com/2016/08/how-to-read-and-write-ini-files-in-php.html
//https://theonlytutorials.com/read-and-update-config-file-ini-file-in-php/
//put the file path here
//$filepath = 'config.ini';
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



