<?php
if (isset($_POST['submit'])){
	$number = empty($_POST['number'])?"" : $_POST['number'];
	if (empty($number)){
		exit("Invalid Number");
	}

	$len_num = strlen($number);
	$r = 0;
	for ($i=0; $i < $len_num ; $i++) { 
		$tempt =  substr($number, $i,1);
		$r+= (pow($tempt,$len_num));
	}

	if ($r==$number){
		echo "true";
	} else {
		echo "false";
	}
} else {
	echo "sadasd";
}
?>

<form action="" method="POST">
	<div> Insert Number</div>
	<input type="text" name="number">
	<input type="submit" name="submit">
</form>




