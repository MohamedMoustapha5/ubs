<?php
// 🔐 Démarrer la session
session_start();
require_once 'config.php';
require_once 'init_lang.php';

$message = trans('saisissez_code');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];

    // Vérifier si le code existe dans la base de données
    try {
        $stmt = $pdo->prepare("SELECT * FROM virements WHERE code_swift = ?");
        $stmt->execute([$code]);
        $virement = $stmt->fetch();
        
        if ($virement) {
            // ✅ Code bon : on crée la session
            $_SESSION['authentifie'] = true;
            $_SESSION['code_utilise'] = $code;
            
            header("Location: statut-virement.php");
            exit;
        } else {
            // ❌ Code incorrect
            $message = trans('code_incorrect');
        }
    } catch (Exception $e) {
        $message = trans('erreur_verification');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vérification du code</title>
    <link rel="stylesheet" href="verification.css">
</head>
<body>

<div class="container">
    <h1><?= trans('verifiez_statut') ?></h1>
    <p><?= trans('entrez_code_swift') ?></p>

    <?php if (!empty($message)) : ?>
        <p style="color:red; font-weight:bold;"><?= $message ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" class="form-control" name="code"
               placeholder="<?= trans('placeholder_code') ?>" required>

        <button type="submit" class="btn-verifier"><?= trans('verifier') ?></button>
    </form>
</div>

</body>
</html>