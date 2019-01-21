<?php

$pasta = $_POST['pasta'];

if($pasta == 'workon'){
	echo iterator_count(new DirectoryIterator('img/WorkOn'));
}


?>