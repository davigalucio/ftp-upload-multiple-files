<?php 
	function uploadFiles($files){
	highlight_string("<?php " . var_export($files, true) . ";?>");
		if($files['files']['name'][0] == ""){
		return "Please select at least one file";
	}

	$folder = "uploads/";
	$names = $files['files']['name'];
	$tmp_names = $files['files']['tmp_name'];

	if(isset($_FILES['files'])){

	$files_array = $files['files']['tmp_name'];
		
	foreach ($files_array as $temp_folder => $image_name) {
			move_uploaded_file($temp_folder, $folder.$image_name);
		}
	return "sucess";

	}		
