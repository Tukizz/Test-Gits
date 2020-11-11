<?php 
function reverse($data) { 
	if (($data == null) || (strlen($data) <= 1)){ 
	echo ($data); 

	}else{ 
		echo ($data[strlen($data) - 1]); 
		reverse(substr($data, 0, (strlen($data) - 1))); 
	} 
} 

$data = "Hello"; 
reverse($data); 

?> 
