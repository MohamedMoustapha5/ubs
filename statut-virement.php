<?php
// 🔐 Liste des 5 codes autorisés
$codes_valides = ["23470", "45480", "65332", "55004", "22670"];

$message = "";

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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statut.css">
    <title>Virement Bancaire</title>
</head>
<body  onload=simulateProgress(95)>
    <div class="header">
        <img src="images/logo.png" alt="Logo Banque">
        <button class="menu-button" onclick=sortir() >Menu</button>
    </div>
    
    <div class="title-container">
        <h2>Suivi du virement</h2>
    </div>
    
    <div class="msg">Cher client, veuillez lire attentivement votre suivi !!</div>

    <div class="bar">
        <div class="progress" id="progress-bar">
            <span class="progress-text" id="progress-percentage">Virement en cours... 0%</span>
        </div>
    </div>

    <div class="item">
        <div class="title">Informations sur l'expéditeur</div>
        <div class="subtitle">Informations personnelles</div>
        <div class="info-row">
            <p class="info-label">NOM:</p>
            <p class="info-value"><strong> DAVID </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">PRÉNOM:</p>
            <p class="info-value"><strong>kash </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">PAYS:</p>
            <p class="info-value"><strong>ÉTATS-UNIS </strong></p>
        </div>
        
        <div class="subtitle">Informations Bancaires</div>
        <div class="info-row">
            <p class="info-label">NUMERO ABA:</p>
            <p class="info-value"><strong>136608876638 </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">N° DE COMPTE:</p>
            <p class="info-value"><strong>10863257126321 </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">NOM DE LA BANQUE:</p>
            <p class="info-value"><strong>UBS </strong></p>
        </div>
    </div>

    <div class="item">
        <div class="title">Informations sur le destinataire</div>
        <div class="subtitle">Informations personnelles</div>
        <div class="info-row">
            <p class="info-label">NOM:</p>
            <p class="info-value"><strong>IRIE BI  </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">PRÉNOM:</p>
            <p class="info-value"><strong>ZAMBLE </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">PAYS:</p>
            <p class="info-value"><strong>CÔTE D'IVOIRE </strong></p>
        </div>
        
        <div class="subtitle">Informations Bancaires</div>
        <div class="info-row">
            <p class="info-label">CODE BANQUE:</p>
            <p class="info-value"><strong>///</strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">CODE GUICHET:</p>
            <p class="info-value"><strong>///</strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">N° DE COMPTE:</p>
            <p class="info-value"><strong>CI650 01541 014706750009 60 </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">NOM DE LA BANQUE:</p>
            <p class="info-value"><strong>BANQUE DES DÉPÔTS DU TRÉSOR </strong></p>
        </div>
    </div>

    <div class="item">
    <div class="title">Informations du virement</div>

        <div class="info-row">
            <p class="info-label">Devise:</p>
            <p class="info-value"><strong>USD</strong></p>
        </div>

        <div class="subtitle">Montant</div>
        <div class="info-row">
            <p class="info-label">Avis de débit d'un montant de :</p>
            <p class="info-value"><strong>55,000.00 USD  </strong></p>
        </div>
        <div class="info-row">
            <p class="info-label">dans le compte numéro:</p>
            <p class="info-value"><strong>**********321</strong></p>
        </div>
        <p>Les détails de paiement supplémentaires sont indiqués ci-dessous.</p>

        <div class="subtitle">Statut du virement</div>
        <p class="condi">Chers clients votre virement est en cours et sera disponible dans votre compte après obtention d'une attestation de conformité. Merci de contacter la direction de conformité pour l'obtention.
La conformité bancaire vise à garantir que les banques et autres institutions financières respectent les réglementations et les normes en matière de gestion des risques, de lutte contre le blanchiment d'argent, de financement du terrorisme et d'autres activités illicites.</p>

        <div class="contact">
            <p>Contact (<strong>WhatsApp:</strong>):
            
                    <a href='https://wa.me/+33745332562' target='_blanc'> +33 7 45 33 25 62</a><p><br>        </div>

        <p class="red">Veuillez noter que le virement sera annulé dans les 72heures si aucun justificatif n'est fourni !!</p>
    </div>    


<script>
            // Function to simulate progress with a maximum percentage
            function simulateProgress(maxPercentage) {
                const progressBar = document.getElementById('progress-bar');
                const progressPercentageText = document.getElementById('progress-percentage');

                // Reset progress
                progressBar.style.width = '0%';
                let currentProgress = 0;
                const duration = 30000; // 15 seconds
                const interval = 200; // Update every 100 milliseconds
                const step = (maxPercentage / (duration / interval)); // Calculate the step increment

                const progressInterval = setInterval(() => {
                    if (currentProgress < maxPercentage) {
                        currentProgress += step;
                        progressBar.style.width = Math.min(currentProgress, maxPercentage) + '%';
                        progressPercentageText.textContent = `Virement en cours... ${Math.round(Math.min(currentProgress, maxPercentage))}%`;
                    } else {
                        clearInterval(progressInterval);
                        if (currentProgress >= maxPercentage) {
                            progressBar.classList.add('pulse'); // Add pulse class after reaching 88%
                        }
                    }
                }, interval);
            }

         function sortir(){
            window.location.href = "../html/verification.html";
         }
            
    </script>
</body>
</html>