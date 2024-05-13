<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Contact </title>
    </head>
    <body>
    <?php

$retour = mail("chasseurnuisible@gmail.com", "Essai", "Coucou les amis !", "");
if($retour) {
    echo "<p>L'email a bien été envoyé.</p>";
}
?>
    </body>
    </html>