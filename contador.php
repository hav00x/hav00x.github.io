<?php

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