<?php

$array=["red", "blue", "yellow", "black", "grey"];
$needles = "yellow";
$cek =  find_needles($array,$needles);
echo ($cek);



function find_needles($array,$needles){
	foreach($array as $l => $val){
		if ($val == $needles){
			return $l;
		}
	}
	return "";
}
?>


