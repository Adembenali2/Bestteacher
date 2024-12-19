<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'BesTeacher';
$username = 'root'; // Votre utilisateur MySQL
$password = '';     // Votre mot de passe MySQL

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si la connexion échoue, afficher un message d'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifier si les données du formulaire sont envoyées
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des champs du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['password'];

    // Vérification des champs vides
    if (empty($email) || empty($mot_de_passe)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    // Requête pour vérifier si l'utilisateur existe
    try {
        $sql = "SELECT * FROM Utilisateurs WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Récupération des informations de l'utilisateur
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur) {
            // Vérification du mot de passe
            if (password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
                // Connexion réussie
                session_start();
                $_SESSION['prenom'] = $utilisateur['prenom'];
                $_SESSION['nom'] = $utilisateur['nom'];
                header("Location: bienvenue.php");
                exit;
            } else {
                header("Location: mdp.php");
            }
        } else {
            header("Location: erreur_connexion.php");
        }
    } catch (PDOException $e) {
        echo "Erreur lors de la connexion : " . $e->getMessage();
    }
}
?>
