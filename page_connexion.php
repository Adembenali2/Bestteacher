<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BesTeacher - Connexion</title>
  <link rel="stylesheet" href="page de connexion.css">
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <img src="Logo.png" alt="BesTeacher Logo">
      <hr style="border: 1px solid black; width: 100%;">
      <p>BesTeacher, l'éducation qui fait la différence</p>
    </div>
    <div class="right-panel">
      <center><h2>Connectez-vous pour accéder à votre espace</h2></center>
      <form id="registerForm" method="POST" action="register1.php">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Votre email">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" placeholder="Votre mot de passe">
        </div>
        <div class="form-group">
          <button type="submit">Connexion</button>
          <a href="C:\Users\adem2\OneDrive\Bureau\github\page_inscription.html" >Vous n'avez pas de compte ?<h4>créer un compte</h4></a>
        </div>
      </form>
      <div class="footer">
        © 2024 BesTeacher
      </div>
    </div>
  </div>
</body>
</html>