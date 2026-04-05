<?php
require_once 'config.php';
require_once 'init_lang.php';

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - UBS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">UBS - Espace client</a>
            <div class="navbar-nav ml-auto">
                <span class="navbar-text text-white mr-3">
                    Bienvenue, <?= htmlspecialchars($_SESSION['user_prenom'] . ' ' . $_SESSION['user_nom']) ?>
                </span>
                <a href="logout.php" class="btn btn-danger btn-sm">Déconnexion</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Bonjour <?= htmlspecialchars($_SESSION['user_prenom']) ?> !</h1>
                    <p class="lead">Bienvenue dans votre espace client UBS.</p>
                    <hr class="my-4">
                    <p>Vous pouvez maintenant accéder à tous nos services.</p>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
    <a class="btn btn-primary btn-lg" href="verification.php" role="button">
        <i class="fas fa-search"></i> Vérifier un statut
    </a>
    <a class="btn btn-info btn-lg" href="client-cartes.php" role="button">
        <i class="fas fa-credit-card"></i> Mes cartes
    </a>
    <a class="btn btn-warning btn-lg" href="client-rib.php" role="button" style="margin-left: 10px;">
    <i class="fas fa-file-invoice"></i> Mon RIB
</a>
    <a class="btn btn-success btn-lg" href="index.php" role="button">
        <i class="fas fa-home"></i> Retour à l'accueil
    </a>
</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>