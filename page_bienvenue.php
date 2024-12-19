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
  <script>
    // Rediriger automatiquement après 5 secondes
    setTimeout(() => {
      window.location.href = "page_acceuil.html"; // Redirige vers la page d'inscription
    }, 5000);
  </script>
</head>
<body>
  <div class="welcome-container">
    <img src="Logo.png" alt="Logo BesTeacher" class="logo">
    <h1>Bienvenue sur BesTeacher !</h1>
    <p>Merci de nous rejoindre. Vous serez redirigé(e) dans quelques instants...</p>
    <p>Si la redirection ne fonctionne pas, <a href="page_acceuil.html">cliquez ici</a>.</p>
  </div>
</body>
</html>
