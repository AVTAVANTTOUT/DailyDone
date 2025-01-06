<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $conn->prepare("INSERT INTO taches (titre, description) VALUES (?, ?)")->execute([$_POST['titre'], $_POST['description']]);
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Tâche</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form method="POST">
      Titre: <input name="titre" required>
      Description: <textarea name="description"></textarea>
      <button>Enregistrer</button>
    </form>
</div>
</body>
</html>