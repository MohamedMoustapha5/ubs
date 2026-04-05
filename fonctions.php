<?php
// fonctions.php - Fonctions utilitaires pour RIB américain

function genererRoutingNumber() {
    // Générer un routing number américain (9 chiffres)
    // Les 4 premiers chiffres identifient la banque (ex: 0210 pour UBS)
    $prefix = '0210'; // Code pour UBS
    $suffix = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
    return $prefix . $suffix;
}

function genererAccountNumber() {
    // Générer un numéro de compte américain (10-17 chiffres)
    $length = rand(10, 12);
    $number = '';
    for ($i = 0; $i < $length; $i++) {
        $number .= rand(0, 9);
    }
    return $number;
}

function genererSwiftCode() {
    // Générer un code SWIFT américain (8 ou 11 caractères)
    $bank_codes = ['UBSW', 'BOFA', 'CITI', 'JPMC', 'WFBI'];
    $bank = $bank_codes[array_rand($bank_codes)];
    $country = 'US';
    $location = '33'; // New York
    $branch = rand(0, 999) ? 'XXX' : str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
    
    return $bank . $country . $location . (strlen($branch) == 3 ? $branch : '');
}

function formatRoutingNumber($routing) {
    // Formater le routing number: XXXX-XXXX-X
    return substr($routing, 0, 4) . '-' . substr($routing, 4, 4) . '-' . substr($routing, 8, 1);
}

function formatAccountNumber($account) {
    // Formater le numéro de compte par groupes de 4
    return trim(chunk_split($account, 4, ' '));
}

// ✅ NOUVELLE FONCTION POUR GÉNÉRER L'IBAN (FIXE POUR TOUS)
function genererIbanFixe() {
    // IBAN UBS Bank USA (fixe pour tous les clients)
    return 'US02 0210 0012 3456 7890 1234';
}

// ✅ NOUVELLE FONCTION POUR GÉNÉRER LA CLÉ RIB (UNIQUE PAR CLIENT)
function genererCleRIB($account_number) {
    // Calcul d'une clé RIB basée sur le numéro de compte
    // Prend les 10 premiers chiffres du compte pour calculer une clé
    $account_digits = preg_replace('/[^0-9]/', '', $account_number);
    $account_value = intval(substr($account_digits, 0, 10));
    $cle = 97 - ($account_value % 97);
    return str_pad($cle, 2, '0', STR_PAD_LEFT);
}

?>