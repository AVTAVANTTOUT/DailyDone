<?php
include 'config.php';
$id = $_GET['id'];
$tache = $conn->query("SELECT * FROM taches WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $conn->prepare("UPDATE taches SET titre = ?, description = ? WHERE id = ?")->execute([$_POST['titre'], $_POST['description'], $id]);
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier une Tâche</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form method="POST">
      Titre: <input name="titre" value="<?= $tache['titre']; ?>" required>
      Description: <textarea name="description"><?= $tache['description']; ?></textarea>
      <button>Mettre à jour</button>
    </form>
</div>
</body>
</html>