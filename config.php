<?php
// config.php
$host = 'localhost';
$dbname = 'ubs_users';
$username = 'root';
$password = '';

// Dans config.php, après la gestion de session
require_once 'fonctions.php';

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

// Gestion de la langue
require_once 'lang.php';

// Changer de langue si demandé
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
    // Rediriger pour enlever le paramètre de l'URL
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

// Langue par défaut
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}
?>