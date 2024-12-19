<?php
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=BesTeacher;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire
    $userId = 1; // Exemple : Utilisateur avec l'ID 1
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse_postale = $_POST['adresse_postale'];
    $telephone = $_POST['telephone'];
    $eleve_nom = $_POST['eleve_nom'] ?? null;
    $eleve_prenom = $_POST['eleve_prenom'] ?? null;
    $eleve_classe = $_POST['eleve_classe'] ?? null;

    // Mise à jour des informations de l'utilisateur
    $stmt = $pdo->prepare("
        UPDATE Utilisateurs
        SET nom = :nom, prenom = :prenom, email = :email, adresse_postale = :adresse_postale,
            telephone = :telephone, eleve_nom = :eleve_nom, eleve_prenom = :eleve_prenom, eleve_classe = :eleve_classe
        WHERE id = :id
    ");
    $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'adresse_postale' => $adresse_postale,
        'telephone' => $telephone,
        'eleve_nom' => $eleve_nom,
        'eleve_prenom' => $eleve_prenom,
        'eleve_classe' => $eleve_classe,
        'id' => $userId,
    ]);

    echo "Mise à jour réussie.";
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    die();
}
?>
