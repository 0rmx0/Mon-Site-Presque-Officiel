<?php
// Fichier contenant le nombre de visites
$counterFile = "visits.txt";

// Initialiser le compteur si le fichier n'existe pas
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Lire le compteur, l'incrémenter et l'écrire à nouveau
$visits = (int)file_get_contents($counterFile);
$visits++;
file_put_contents($counterFile, $visits);

// Retourner le nombre de visites au client
echo $visits;
?>
