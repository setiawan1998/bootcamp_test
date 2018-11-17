<?php

if (isset($_POST['submit'])) {
	$password = $_POST['password'];
	validasi($password);
}

function validasi($password){
	$h_a = preg_match('@[0-9]@', $password);
	$h_k = preg_match('@[a-z]@', $password);
	$h_b = preg_match('@[A-Z]@', $password);
	$h_c = preg_match('@[!#$%^&*()_+-=,.]@', $password);
	if($password == ""){
		echo "Input harus diisi";
	}
	else if(strlen($password) != 8){
		echo "Karakter Harus Berjumlah 8";
	}
	else if (!$h_k || !$h_b || !$h_c || $h_a) {
		echo "Karakter harus terdisi dari huruf besar, huruf kecil, dan simbol";
	}else{
		echo "sukses";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="" id="form">
		<input type="text" name="password" id="password" placeholder="Password">
		<input type="submit" name="submit" id="submit">
	</form>
</body>
</html>