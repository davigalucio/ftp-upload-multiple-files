<?php
	require("functions.php";
	$response = "";
	if(isset($_FILES['files'])){
		$response = uploadFiles($_FILES);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Uploading multiple files</title>
</head>
<body>
	
	<!-- Upload form -->
	<form action="" method="post" enctype="multipart/form-data">
		<h1> Select the files you want to upload </h1>
		<input type="file" name="files[]" multiple >

		<button type="submit" name="upload">Upload files</button>
	<?php
		if($responde == "sucess"){
		?>
			<p class="sucess">Files uploaded sucessfully</p>
	
		<?php
	}else{
		?>
			<p class="error"><?php echo $response; ?></p>
		<?php
		}
	?>
	</form>
	

</body>
</html>
