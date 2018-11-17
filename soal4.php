<?php

if (isset($_POST['submit'])) {
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
	get_date($date1, $date2);
}
function get_date($date1, $date2){
	$period = new DatePeriod(
     new DateTime($date1),
     new DateInterval('P1D'),
     new DateTime($date2)
	);
	foreach ($period as $key => $value) {
	    echo "'".$value->format('Y-m-d')."',";      
	}
	echo "'".$date2."'";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="" id="form">
		<input type="date" name="date1">-<input type="date" name="date2">
		<input type="submit" name="submit" id="submit">
	</form>
</body>
</html>