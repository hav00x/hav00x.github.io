<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

$pasta = $_POST['pasta'];

if($pasta == 'WorkOn'){
	$directory = "img/WorkOn/";
	$filecount = 0;
	$files = glob($directory . "*");
	if ($files){
		$filecount = count($files);
	}
	echo $filecount;
}


?>