<?php
// init_lang.php - Initialisation de la langue (À inclure au début de chaque page)

// Démarrer la session uniquement si elle n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialiser la langue par défaut si pas définie
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr'; // Français par défaut
}

// Permet de changer de langue via ?lang=en ou ?lang=fr
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
    // Redirection sans le paramètre ?lang= pour garder l'URL propre
    $current_url = strtok($_SERVER['REQUEST_URI'], '?');
    header("Location: " . $current_url);
    exit;
}

// Charger les traductions
require_once 'lang.php';
$current_lang = $_SESSION['lang'];
$t = $lang[$current_lang] ?? $lang['fr']; // Fallback sur français si langue non trouvée

/**
 * Fonction pour récupérer une traduction
 * @param string $key Clé de traduction
 * @return string Texte traduit ou la clé si non trouvée
 */
function trans($key) {
    global $t;
    return $t[$key] ?? $key;
}
?>
