<?php

$array=[2, 4, 0, 100, 4, 11, 2602, 36];
$cek =  cek_arr($array);
print_r($cek);



function cek_arr($array){
	$res = array();
	$res['result']=true;
	$res['number']="";
	$odd = 0;
	$odd_num = "";
	$event_num = "";
	$event = 0;
	foreach($array as $l => $val){
		if($val % 2 == 0){
			$event+=1;
			$event_num = $val;
		} else{
			$odd+=1;
			$odd_num =$val;
		}
	}

	if ($event > $odd){
		$res['number'] = $odd_num;
	} else if ($odd > $event){
		 $res['number'] = $event_num;
	} elseif($odd==0||$event==0){
		$res['number'] = $event_num;
		$res['result'] = false;
	}
	return $res;
}
?>


