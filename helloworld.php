<?php
	$firstName = "Elise";
	$lastName = "Pals";
	
	// echo tr�kib v�lja muutuja v��rtuse
	// echo $firstName;
	// echo $lastName;
	
	echo $firstName." ".$lastName; // . liidab stringe
?>

<br>

<?php
	$age = 22;
	
	if ($age < 18){
		// kui vastus on t�ene (true)	
		echo "alaealine";
	} else {
		// kui vastus on v��r (false)
		echo "t�isealine";
	}
?>

<br>

<?php
	for ($i = 1; $i <= $age; $i = $i + 1){ //for ($i = 0; $i < $age; $i = $i + 1
		//echo "palju ";
		echo $i."palju ";
	}
	echo "�nne";
?>

<br>

<?php
	echo date("l, d.F, Y, H.i.s");
?>