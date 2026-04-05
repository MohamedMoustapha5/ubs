<?php
// config.php
$host = 'localhost';
$dbname = 'ubs_users';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Démarrer la session UNIQUEMENT si elle n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure les fonctions (MAIS PAS init_lang.php ici)
require_once 'fonctions.php';

// Créer la table de configuration si elle n'existe pas (pour les logos)
if (function_exists('createConfigurationTable')) {
    createConfigurationTable();
}

// Créer la table de configuration si elle n'existe pas
if (function_exists('createConfigurationTable')) {
    createConfigurationTable();
}
?>