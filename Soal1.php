<?php 

function binaryArray($data, $n) {  
    $hitung = 0; 	 
	$hasil = 0; 

	for ($i = 0; $i < $n; $i++){ 
		if ($data[$i] == 0) {
			$hitung = 0;
            
		}else{
			$hitung++; 
			$hasil = max($hasil, $hitung); 
		} 
	} 
	return $hasil; 
} 
 
$data = array(1, 1, 0, 1, 1, 1); 
$n = sizeof($data); 

echo binaryArray($data, $n) ; 

?> 
