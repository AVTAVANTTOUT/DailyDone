<?php
include 'config.php';
$taches = $conn->query("SELECT * FROM taches")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Tâches</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
  <H1>DailyDone</H1>
<div class="container">
    <a href="ajouter.php">Ajouter une tâche</a>
    <ul>
    <?php foreach ($taches as $t): ?>
      <li><?= $t['titre']; ?> - <?= $t['description']; ?> <a href="modifier.php?id=<?= $t['id']; ?>">Modifier</a> <a href="supprimer.php?id=<?= $t['id']; ?>">Supprimer</a></li>
    <?php endforeach; ?>
    </ul>
</div>

<a href="aide.php" class="help-button">Besoin d'aide ou signaler un problème</a>
</body>
</html>
