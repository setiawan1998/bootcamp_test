<?php 
function triangle(){
echo "<center>";
for ($i=0; $i < 8; $i++) {
	for ($j=15-$i-$i; $j >= 1; $j--) {
		if ($i == 0) {
			echo "*";
	 	}else if($j == 1){
	 		echo "*";
	 	}else if($j == 15-$i-$i){
	 		echo "*";
	 	}else{
	 		echo "&nbsp;&nbsp;";
	 	}
	}
	echo "<br>";
}
echo "</center>"; 
}
triangle();
?>