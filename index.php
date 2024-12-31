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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Kitsch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="title top-title">Bienvenue dans le Monde Magique!</h1>
        <video class="video" autoplay muted loop>
            <source src="video.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
        <h1 class="title bottom-title">Rêvez, Croyez, Explorez!</h1>
        <p class="counter">Vous êtes le <strong><?= $visits ?></strong>ème Gogo à visiter ce site!</p>
    </div>
</body>
</html>
