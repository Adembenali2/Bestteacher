<?php
// Configuration des paramètres de connexion à la base de données
$host = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "BesTeacher"; // Nom de la base de données

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration pour afficher les erreurs en mode exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparation de la requête pour récupérer les informations des utilisateurs
    $sql = "SELECT id, nom, prenom, email, adresse_postale, telephone, date_inscription FROM Utilisateurs";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Vérification si des utilisateurs existent
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Liste des Utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse Postale</th>
                <th>Téléphone</th>
                <th>Date d'Inscription</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($utilisateurs)): ?>
                <?php foreach ($utilisateurs as $utilisateur): ?>
                    <tr>
                        <td><?= htmlspecialchars($utilisateur['id']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['nom']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['prenom']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['email']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['adresse_postale']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['telephone']) ?></td>
                        <td><?= htmlspecialchars($utilisateur['date_inscription']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align: center;">Aucun utilisateur trouvé</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
