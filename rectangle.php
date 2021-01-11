<?php
$L = 20;
$l = 10;
$perimetre = (($L + $l) * 2);
$demi_perimetre = $perimetre / 2;
$surface_rectangle = $L * $l;
$diagonale = sqrt (($L**2) + ($l**2));
echo "Le périmètre du rectangle est ". $perimetre; echo "<br>";
echo "Le demi-périmètre du rectangle est ". $demi_perimetre; echo "<br>";
echo "La surface du rectangle est ". $surface_rectangle; echo "<br>";
echo "La longueur de la diagonale du rectangle est ". $diagonale; echo "<br>";
?>