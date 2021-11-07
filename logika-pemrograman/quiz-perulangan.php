<?
// tampilan deret bilangan prima
/*
for ($i=1; $i <= 20; $i++) { 
	$a=0;
	for ($j=1; $j <= $i; $j++) { 
		if ($i%$j==0) {
			$a++;
		}
	}
	if ($a==2) {
		echo $i."<br>";
	}
}
*/


for ($i=0; $i <= 20; $i++) { 

	for ($j=2; $j <= $i; $j++) { 
		
		$hasilbagi=$i%$j;

		if ($i != $j && $hasilbagi == 0) {
			
			break;
		}

		else if($i==$j){
			
			echo $i."<br>";
		}
	}
}
?>