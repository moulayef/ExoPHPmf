<?php
    $val1 = rand(-4,200);
    $val2 = rand(-4,200);
    $val3 = rand(-4,200);
    $max = null;
    $moy = null;
    $min = null;

    if (($val1<$val2)<$val3){
        $max = $val3;
        $moy = $val2;
        $min = $val1;
    }
    
    if (($val1>$val2)>$val3){
        $max = $val1;
        $moy = $val2;
        $min = $val3; 
    }

    if (($val3<$val1)<$val2){
        $max = $val2;
        $moy = $val1;
        $min = $val3;
        
    }

    if (($val2<$val3)<$val1){
        $max = $val1;
        $moy = $val3;
        $min = $val2;
         
    }

    echo "Ordre decroissant des variables est : $max,$moy,$min";

?>