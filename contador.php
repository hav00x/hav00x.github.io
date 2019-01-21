<?php

$pasta = $_POST['pasta'];

if($pasta == 'WorkOn'){
	echo iterator_count(new DirectoryIterator('img/WorkOn'));
}


?>