<?php
	echo "Saisir le nom de port de départ : " ;
	$portDepart = fgets(STDIN);
	echo "Saisir le port d'arrivée : " ;
	$portArrive = fgets(STDIN);
	echo $portDepart , $portArrive ;
	$temp = $portDepart ;
	$portDepart = $portArrive;
	$portArrive = $temp;
	echo $portDepart , $portArrive ;

?>
