<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Créer un compte</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f3f2;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 75%;
      max-width: 800px;
      display: flex;
      flex: 1;
      overflow: hidden;
      margin: 10px auto;
      height: auto;
    }

    .form-container {
      flex: 2;
      padding: 20px 30px;
      background-color: #ffece3;
    }

    .form-container h1 {
      color: #444444;
      font-size: 1.8em;
      margin-bottom: 15px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #444444;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 0.9em;
      transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .form-group small {
      display: block;
      margin-top: 4px;
      color: #888888;
      font-size: 0.85em;
    }

    button[type="submit"] {
      background-color: #ff6b6b;
      color: #ffffff;
      border: none;
      border-radius: 8px;
      padding: 10px 12px;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.3s ease;
      width: 100%;
    }

    button[type="submit"]:hover {
      background-color: #ad4444;
    }

    .logo-container {
      flex: 1;
      background-color: #ffece3;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 15px;
      text-align: center;
    }

    .logo-container img {
      max-width: 100px;
      border-radius: 10px;
    }

    .logo-container p {
      margin-top: 10px;
      font-style: italic;
      color: #444444;
      font-size: 0.9em;
    }

    footer {
      background-color: #ffffff;
      text-align: center;
      font-size: 0.8em;
      color: #777;
      padding: 12px 0;
      margin-top: auto;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h1>Créez votre compte</h1>
      <form id="registerForm" method="POST" action="register.php">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
          <small>Votre nom complet est requis</small>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
        </div>
        <div class="form-group">
          <label for="email">Adresse mail</label>
          <input type="email" id="email" name="email" placeholder="exemple@email.com" required>
        </div>
        <div class="form-group">
          <label for="adresse">Adresse postale</label>
          <input type="text" id="adresse" name="adresse" placeholder="Rue, Code postal">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" placeholder="********" required>
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirmez votre mot de passe</label>
          <input type="password" id="confirmPassword" name="confirmPassword" placeholder="********" required>
        </div>
        <div class="form-group">
          <label for="telephone">Numéro de téléphone</label>
          <input type="tel" id="telephone" name="telephone" placeholder="+33" required>
        </div>
        <div class="form-group">
          <input type="checkbox" id="cgu" name="cgu" required>
          <label for="cgu">J'accepte les <a href="#">CGU</a></label>
        </div>
        <button type="submit">S'inscrire</button>
      </form>
    </div>
    <div class="logo-container">
      <img src="Logo BesTeacher.png" alt="Logo BesTeacher">
      <p>“BesTeacher, l’éducation qui fait la différence”</p>
    </div>
  </div>
  <footer>
    Copyright © 2024 BesTeacher
  </footer>
</body>
</html>

