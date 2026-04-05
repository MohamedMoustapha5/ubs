<?php
// 🔐 Démarrer la session
session_start();
require_once 'config.php';

$message = "Saisissez votre code reçu par Email";

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
            $message = "code incorrect. Aucun accès au statut du virement.";
        }
    } catch (Exception $e) {
        $message = "Erreur de vérification.";
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
    <h1>Vérifiez votre statut</h1>
    <p>Veuillez entrer le code SWIFT reçu.</p>

    <?php if (!empty($message)) : ?>
        <p style="color:red; font-weight:bold;"><?= $message ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" class="form-control" name="code"
               placeholder="Entrez le code SWIFT..." required>

        <button type="submit" class="btn-verifier">Vérifier</button>
    </form>
</div>

</body>
</html>