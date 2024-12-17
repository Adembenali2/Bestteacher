<?php
// Connexion à la base de données
$host = 'localhost';      // Hôte
$dbname = 'BesTeacher';   // Nom de la base de données
$username = 'root';       // Votre utilisateur MySQL
$password = '';           // Votre mot de passe MySQL

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si la connexion échoue, afficher un message d'erreur
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifier si les données du formulaire ont été envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $mot_de_passe = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $telephone = $_POST['telephone'];
    $accepte_cgu = isset($_POST['cgu']) ? 1 : 0;

    // Validation des mots de passe
    if ($mot_de_passe !== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        exit;
    }

    // Hachage du mot de passe pour la sécurité
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_BCRYPT);

    // Préparer la requête SQL pour insérer les données
    $sql = "INSERT INTO Utilisateurs (nom, prenom, email, adresse_postale, mot_de_passe, telephone, accepte_cgu)
            VALUES (:nom, :prenom, :email, :adresse, :mot_de_passe, :telephone, :accepte_cgu)";

    // Exécution de la requête
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':mot_de_passe', $mot_de_passe_hache);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':accepte_cgu', $accepte_cgu);

        if ($stmt->execute()) {
            echo "Inscription réussie !";
        } else {
            echo "Une erreur est survenue lors de l'inscription.";
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion des données : " . $e->getMessage();
    }
}
?>
