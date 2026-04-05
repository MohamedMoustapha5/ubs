<?php
require_once 'config.php';
require_once 'init_lang.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $mot_de_passe = $_POST['mot_de_passe'];

    if (empty($email) || empty($mot_de_passe)) {
        $message = "Veuillez remplir tous les champs.";
    } else {
        // Chercher l'utilisateur
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
            // Connexion réussie
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nom'] = $user['nom'];
            $_SESSION['user_prenom'] = $user['prenom'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'] ?? 'client'; // Ajout du rôle
            
            // ✅ REDIRECTION SELON LE RÔLE
            if (isset($user['role']) && $user['role'] === 'admin') {
                header("Location: admin-dashboard.php"); // Admin va vers son dashboard
            } else {
                header("Location: index.php"); // Client va vers l'accueil
            }
            exit;
        } else {
            $message = "Email ou mot de passe incorrect.";
        }
    }
}
?>

<!-- Le reste de votre HTML reste IDENTIQUE -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - UBS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Connexion</h4>
                    </div>
                    <div class="card-body">
                        <?php if ($message): ?>
                            <div class="alert alert-danger"><?= $message ?></div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" name="mot_de_passe" class="form-control" required>
                            </div>
                            
                            <button type="submit" class="btn btn-danger btn-block">Se connecter</button>
                        </form>
                        
                        <p class="text-center mt-3">
                            Pas encore de compte ? <a href="register.php">Inscrivez-vous</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>