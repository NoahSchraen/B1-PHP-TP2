<?php
	echo "Saisir le nom de port de départ : " ;
	$portDepart = rtrim(fgets(STDIN));
	echo "Saisir le port d'arrivée : " ;
	$portArrive = rtrim(fgets(STDIN));
	echo "Départ : ", $portDepart , "   Arrivée : ", $portArrive , "\n";
	$temp = $portDepart ;
	$portDepart = $portArrive;
	$portArrive = $temp;
	echo "\nTraversée \"Retour\" : \nDépart : ", $portDepart ,"  Arrivée : ", $portArrive, "\n" ;

?>
