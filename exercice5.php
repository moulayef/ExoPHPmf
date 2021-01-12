<?php
$annee = rand(1800,2030);
if ($annee % 4 ==0){
    echo "Cette $annee est bisextile";
}else{
    echo "Cette $annee n'est pas bisextile";
}
?>