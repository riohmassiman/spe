<?php

$array1=[1,2,4,6,7];
$array2=[1];
$cek =  blueOcean($array1,$array2);
print_r ($cek);


function _array_hash($key,$arr){
	$res=array();
    foreach($data as $l=>$val){
        if (!empty($val[$key])){
            $res[$val[$key]]=$val;
        }
        unset($data[$l]);
    }
    return $res;
}
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


