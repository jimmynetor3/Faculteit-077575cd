<?php 

$getal = readline("welk getal wil je");
$antwoord = 1;

for ($i=1; $i <= $getal ; $i++) { 
	$antwoord *= $i;
}
echo $antwoord;
 ?>