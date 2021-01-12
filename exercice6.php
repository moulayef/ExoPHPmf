<?php
    $mois = rand(1,12);
    $annee = rand(2000,2030);
    $nombre_de_jour = cal_days_in_month(CAL_GREGORIAN, $mois, $annee); // 31

    echo "Il y'a {$nombre_de_jour} jours dans le mois $mois de l'année $annee";

?>