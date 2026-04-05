<?php
require_once 'config.php';
require_once 'vendor/autoload.php';

// Vérifier si l'utilisateur est connecté ET est admin
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'] ?? 0;

// Récupérer les informations du virement
try {
    $stmt = $pdo->prepare("SELECT * FROM virements WHERE id = ?");
    $stmt->execute([$id]);
    $virement = $stmt->fetch();
    
    if (!$virement) {
        die("Virement non trouvé");
    }
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}

// Création du PDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);

// Configuration
$pdf->SetCreator('UBS Admin');
$pdf->SetAuthor('UBS BANK');
$pdf->SetTitle('Ordre de virement #'.$virement['id']);
$pdf->SetSubject('Ordre de virement international');

// Supprimer l'en-tête et le pied de page par défaut
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Marges
$pdf->SetMargins(15, 15, 15);
$pdf->SetAutoPageBreak(TRUE, 15);

// Ajouter une page
$pdf->AddPage();

// ==============================================
// EN-TÊTE AVEC LOGO ET PAYS
// ==============================================

// Logo à gauche
$logo_file = 'images/logo.png';
if (file_exists($logo_file)) {
    $pdf->Image($logo_file, 15, 10, 50, 0, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
} else {
    // Si le logo n'existe pas, afficher le nom de la banque
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->SetXY(15, 15);
    $pdf->Cell(0, 10, 'UBS BANK', 0, 1, 'L');
}

// Pays de l'expéditeur en dessous du logo
$pdf->SetFont('helvetica', '', 11);
$pdf->SetXY(15, 35); // Position sous le logo
$pdf->Cell(0, 6, $virement['expediteur_pays'], 0, 1, 'L');

// Ligne de séparation sous l'en-tête
$pdf->Line(15, 45, 195, 45);
$pdf->Ln(15); // Saut de ligne après la ligne

// ==============================================
// TITRE
// ==============================================
$pdf->SetFont('helvetica', 'B', 18);
$pdf->Cell(0, 8, 'ORDRE DE VIREMENT INTERNATIONAL', 0, 1, 'C');
$pdf->SetFont('helvetica', 'I', 9);
$pdf->Cell(0, 4, 'International Transfer Order', 0, 1, 'C');
$pdf->Ln(8);

// ==============================================
// RÉFÉRENCE ET DATE
// ==============================================
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(50, 6, 'Référence SWIFT / SWIFT Ref:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(60, 6, $virement['code_swift'], 0, 0, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(45, 6, "Date d'émission / Issue date:", 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, date('d/m/Y', strtotime($virement['date_creation'])), 0, 1, 'L');
$pdf->Ln(5);

// ==============================================
// SECTION 1 - BANQUE ÉMETTRICE
// ==============================================
$pdf->SetFont('helvetica', 'B', 11);
$pdf->Cell(0, 6, '1. Informations de la banque émettrice (Ordering Institution)', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 10);

$pdf->Cell(55, 6, '   Banque / Bank:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_nom_banque'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   BIC/SWIFT:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_bic'] ?? 'BKBCGB2L', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Adresse / Address:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_pays'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Compte débité / Debited account:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_numero_compte'], 0, 1, 'L');
$pdf->Ln(3);

// ==============================================
// SECTION 2 - ORDONNATEUR
// ==============================================
$pdf->SetFont('helvetica', 'B', 11);
$pdf->Cell(0, 6, '2. Informations de l\'ordonnateur (Ordering Customer)', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 10);

$pdf->Cell(55, 6, '   Nom / Name:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_prenom'].' '.$virement['expediteur_nom'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Adresse / Address:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_pays'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Compte / Account:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_numero_compte'], 0, 1, 'L');
$pdf->Ln(3);

// ==============================================
// SECTION 3 - BANQUE BÉNÉFICIAIRE
// ==============================================
$pdf->SetFont('helvetica', 'B', 11);
$pdf->Cell(0, 6, '3. Informations de la banque bénéficiaire (Beneficiary Bank)', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 10);

$pdf->Cell(55, 6, '   Banque / Bank:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['destinataire_nom_banque'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   BIC/SWIFT:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['destinataire_bic'] ?? 'UGABGALI', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Adresse / Address:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['destinataire_pays'], 0, 1, 'L');
$pdf->Ln(3);

// ==============================================
// SECTION 4 - BÉNÉFICIAIRE
// ==============================================
$pdf->SetFont('helvetica', 'B', 11);
$pdf->Cell(0, 6, '4. Informations du bénéficiaire (Beneficiary Customer)', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 10);

$pdf->Cell(55, 6, '   Nom / Name:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['destinataire_prenom'].' '.$virement['destinataire_nom'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Adresse / Address:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['destinataire_pays'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Compte / Account:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['destinataire_numero_compte'], 0, 1, 'L');
$pdf->Ln(3);

// ==============================================
// SECTION 5 - DÉTAILS DU PAIEMENT
// ==============================================
$pdf->SetFont('helvetica', 'B', 11);
$pdf->Cell(0, 6, '5. Détails du paiement (Payment Details)', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 10);

$pdf->Cell(55, 6, '   Montant / Amount:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, number_format($virement['montant'], 2, ',', ' ').' '.$virement['devise'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Devise / Currency:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['devise'], 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(55, 6, '   Date de valeur / Value date:', 0, 0, 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, date('d/m/Y', strtotime($virement['date_creation'])), 0, 1, 'L');

// ✅ SUPPRESSION DE LA LIGNE "Motif du virement"
// Plus rien n'est affiché ici

$pdf->Ln(2);

// ==============================================
// SECTION 6 - BANQUES INTERMÉDIAIRES
// ==============================================
$pdf->SetFont('helvetica', 'B', 11);
$pdf->Cell(0, 6, '6. Banques intermédiaires (Intermediary Institutions)', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 10);

$pdf->Cell(55, 6, '   Banque correspondante /', 0, 1, 'L');
$pdf->SetX(70);
$pdf->Cell(0, 6, 'Correspondent bank:', 0, 1, 'L');
$pdf->SetX(70);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 6, $virement['expediteur_nom_banque'], 0, 1, 'L');
$pdf->Ln(3);

// Le message de statut n'est pas affiché dans le PDF téléchargé.

// Générer le PDF
$pdf->Output('ordre_virement_'.$virement['id'].'_'.date('Ymd').'.pdf', 'D');
exit;
?>