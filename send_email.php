<?php
    $name = $_POST['om'];
    $email = $_POST['email'];
    $phone = $_POST['Téléphone'];
    $message = $_POST['Commentaire'];
    $email_to = "chasseurnuisible@gmail.com";

    $subject = "Nouveau rendez-vous";

    $message = "Nom: $fname $lname\n";
    $message.= "Téléphone: $phone\n";
    $message.= "Commentaire: $comment\n";

    mail($email_to, $subject, $message);

    header('Location: thank_you.html');
?>