<?php
session_start();
if (!isset($_SESSION['prenom']) || !isset($_SESSION['nom'])) {
    header("Location: page_connexion.php");
    exit;
}
$prenom = htmlspecialchars($_SESSION['prenom']);
$nom = htmlspecialchars($_SESSION['nom']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue</title>
  <link rel="stylesheet" href="welcome.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f9;
    }
    .welcome-container {
      text-align: center;
    }
    h1 {
      color: #333;
    }
    p {
      color: #666;
    }
    .logo {
      width: 100px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <img src="Logo.png" alt="Logo BesTeacher" class="logo">
    <h1>Bienvenue sur BesTeacher, <?php echo "Monsieur " . $nom . " " . $prenom; ?> !</h1>
    <p>Nous sommes ravis de vous accueillir.</p>
    <p><a href="page_acceuil.html">Accéder à votre espace</a>.</p>
  </div>
</body>
</html>
