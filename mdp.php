<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Erreur de Connexion</title>
  <link rel="stylesheet" href="error.css">
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
    .error-container {
      text-align: center;
    }
    h1 {
      color: #d9534f;
    }
    p {
      color: #666;
    }
    .logo {
      width: 100px;
      margin-bottom: 20px;
    }
  </style>
  <script>
    // Rediriger automatiquement après 5 secondes
    setTimeout(() => {
      window.location.href = "page_connexion.php"; // Redirige vers la page de connexion
    }, 5000);
  </script>
</head>
<body>
  <div class="error-container">
    <img src="Logo.png" alt="Logo BesTeacher" class="logo">
    <h1>Votre mot de passe est incorrect.</h1>
    <p>Vous serez redirigé(e) vers la page de connexion dans quelques instants...</p>
    <p>Si la redirection ne fonctionne pas, <a href="login.html">cliquez ici</a>.</p>
  </div>
</body>
</html>

<?php
// Exemple de script PHP pour gérer une tentative de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    // Vérifier les informations d'identification (exemple fictif)
    $isAuthenticated = false; // Remplacez par votre logique de vérification

    if (!$isAuthenticated) {
        // Afficher la page d'erreur
        echo file_get_contents(__FILE__);
        exit;
    }
    
    // Si les informations d'identification sont correctes, redirigez
    header('Location: .php');
    exit;
}
?>
