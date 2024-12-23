<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Créer un compte</title>
  <!-- Lien vers le fichier CSS -->
  <link rel="stylesheet" href="PageInscription.css" />
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h1>Créez votre compte</h1>
      <form id="registerForm" method="POST" action="register.php">
        <div class="form-grid">
          <div class="form-group">
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            <small>Votre nom complet est requis</small>
          </div>
          <div class="form-group">
            <label for="prenom">Prénom *</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
          </div>
          <div class="form-group">
            <label for="email">Adresse mail *</label>
            <input type="email" id="email" name="email" placeholder="exemple@email.com" required>
          </div>
          <div class="form-group">
            <label for="adresse">Adresse postale</label>
            <input type="text" id="adresse" name="adresse" placeholder="Rue, Code postal">
          </div>
          <div class="form-group">
            <label for="password">Mot de passe *</label>
            <input type="password" id="password" name="password" placeholder="********" required>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirmez votre mot de passe *</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="********" required>
          </div>
          <div class="form-group">
            <label for="telephone">Numéro de téléphone *</label>
            <input type="tel" id="telephone" name="telephone" placeholder="+33" required>
          </div>

          <!-- Choix du statut : Élève ou Parent -->
          <div class="form-status">
            <label>Je suis :</label>
            <div>
              <input type="radio" id="statutEleve" name="statut" value="eleve" checked>
              <label for="statutEleve">Élève</label>
            </div>
            <div>
              <input type="radio" id="statutParent" name="statut" value="parent">
              <label for="statutParent">Parent</label>
            </div>
          </div>

          <!-- Conteneur pour les informations de l'élève (affiché si parent) -->
          <div id="eleveContainer">
            <h2>Informations de l'élève</h2>
            <div class="form-group">
              <label for="eleveNom">Nom de l'élève</label>
              <input type="text" id="eleveNom" name="eleveNom" placeholder="Nom de l'élève">
            </div>
            <div class="form-group">
              <label for="elevePrenom">Prénom de l'élève</label>
              <input type="text" id="elevePrenom" name="elevePrenom" placeholder="Prénom de l'élève">
            </div>
            <div class="form-group">
              <label for="eleveClasse">Classe de l'élève</label>
              <input type="text" id="eleveClasse" name="eleveClasse" placeholder="Classe (ex: 5ème A)">
            </div>
          </div>

          <div class="cgu-container">
            <input type="checkbox" id="cgu" name="cgu" required>
            <label for="cgu">J'accepte les <a href="cgu.html">CGU</a></label>
          </div>

          <button type="submit">S'inscrire</button>
        </div>
      </form>
    </div>
    <div class="logo-container">
      <img src="Logo.png" alt="Logo BesTeacher">
      <p>“BesTeacher, l’éducation qui fait la différence”</p>
    </div>
  </div>

  <footer>
    Copyright © 2024 BesTeacher
  </footer>

  <!-- Lien vers le fichier JavaScript -->
  <script src="PageInscription.js"></script>
</body>
</html>