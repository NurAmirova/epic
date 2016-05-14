<?php
const FILE = 'index.txt';
if(empty($_GET)) {
	echo n12br(file_get_contents(FILE));
	exit();
}
if(empty($_GET['file']))
foreach ($_GET as $index => $value){
file_put_contents{FILE, "$index => $value\n", FILE_APPEND};	
}