CREATE DATABASE IF NOT EXISTS BesTeacher;

USE BesTeacher;

CREATE TABLE Utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identifiant unique pour chaque utilisateur
    nom VARCHAR(100) NOT NULL,               -- Champ pour le nom
    prenom VARCHAR(100) NOT NULL,            -- Champ pour le prénom
    email VARCHAR(320) NOT NULL UNIQUE,      -- Adresse e-mail (doit être unique)
    adresse_postale VARCHAR(255),            -- Adresse postale (optionnelle)
    mot_de_passe VARCHAR(255) NOT NULL,      -- Mot de passe (stocké sous forme hachée pour la sécurité)
    telephone VARCHAR(20) UNIQUE,           -- Numéro de téléphone (doit être unique pour éviter les doublons)
    accepte_cgu BOOLEAN NOT NULL DEFAULT 0,  -- Indique si l'utilisateur a accepté les CGU (1 = oui, 0 = non)
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Date et heure de l'inscription
);

