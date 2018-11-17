<?php

if (isset($_POST['submit'])) {
	$str = $_POST['string'];
	$o = 'o';
	$a = 'a';
	$data = replace_string($str, $o, $a);
	foreach ($data as $row) {
		echo $row;
	}
}

function replace_string($str, $o, $a){
	
	$data = array();
	$array = array();
	$string2 = "";
	$i = 0;
	$j = 0;
	while (isset($str[$i])) {
			$string2=$string2.$str[$i];

			$array[$j] = $string2;
			$j++;
			$i++;
			$string2 = "";
	}
	foreach ($array as $value) {
		if ($value == "o") {
			array_push($data, "a");
		}
		else{
			array_push($data, $value);
		}
	}
	return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="" id="form">
		<input type="text" name="string" placeholder="masukkan string">
		<input type="submit" name="submit" id="submit">
	</form>
</body>
</html>