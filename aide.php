<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aide - Signaler un problème</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Besoin d'aide ?</h1>
        <p>Remplissez ce formulaire pour signaler un problème.</p>
        <form action="envoyer_demande.php" method="post">
            <label for="name">Votre nom :</label>
            <input type="text" id="name" name="nom" required>
            
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required>
            
            <label for="problem">Décrivez votre problème :</label>
            <textarea id="problem" name="probleme" rows="5" required></textarea>
            
            <button type="submit">Envoyer</button>
        </form>
        <a href="index.php">Retour à l'accueil</a>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $probleme = htmlspecialchars($_POST['probleme']);

    $to = 'izn0xe@gmail.com';
    $subject = 'Nouveau problème signalé';
    $message = "Nom: $nom\nEmail: $email\nProblème: $probleme";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Merci, votre demande a été envoyée avec succès.</p>";
    } else {
        echo "<p>Une erreur s'est produite lors de l'envoi de votre demande.</p>";
    }
}
?>
