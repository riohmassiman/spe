<?php

$array1=[1,5,5,5,7];
$array2=[5];
$cek =  blueOcean($array1,$array2);
print_r ($cek);



function blueOcean($array1,$array2){
	foreach($array2 as $l => $val){
		$array2[$val] = $val;
	}
	foreach($array1 as $l => $val){
		if (!empty($array2[$val])){
			unset($array1[$l]);
		}
	}
	return $array1;
}
?>


