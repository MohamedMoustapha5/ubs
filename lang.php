<?php
// lang.php - Traductions simples français/anglais

$lang = [];

// FRANÇAIS
$lang['fr'] = [
    // Navigation
    'accueil' => 'Accueil',
    'espace_client' => 'Espace client',
    'connexion' => 'Connexion',
    'inscription' => 'Inscription',
    'mon_compte' => 'Mon compte',
    'verifier_statut' => 'Vérifier statut',
    'deconnexion' => 'Déconnexion',
    'a_propos' => 'À propos',
    'contact' => 'Contact',
    'statut' => 'Statut',
    'faq' => 'FAQ',
    'services' => 'Services',
    'temoignages' => 'Témoignages',
    'bonjour' => 'Bonjour',
    
    // Admin
    'tableau_de_bord' => 'Tableau de bord',
    'virements' => 'Virements',
    'nouveau_virement' => 'Nouveau virement',
    'clients' => 'Clients',
    'total_virements' => 'Total virements',
    'clients_inscrits' => 'Clients inscrits',
    'en_attente' => 'En attente',
    'aujourd_hui' => "Aujourd'hui",
    'creer_virement' => 'Créer un nouveau virement',
    'virements_recents' => 'Virements récents',
    'id' => 'ID',
    'code_swift' => 'Code SWIFT',
    'client' => 'Client',
    'montant' => 'Montant',
    'date' => 'Date',
    'statut' => 'Statut',
    'actions' => 'Actions',
    'modifier' => 'Modifier',
    'voir' => 'Voir',
    'supprimer' => 'Supprimer',
    'telecharger_pdf' => 'Télécharger PDF',
    
    // Connexion/Inscription
    'email' => 'Email',
    'mot_de_passe' => 'Mot de passe',
    'se_connecter' => 'Se connecter',
    'pas_de_compte' => 'Pas encore de compte ?',
    'inscrivez_vous' => 'Inscrivez-vous',
    'nom' => 'Nom',
    'prenom' => 'Prénom',
    'telephone' => 'Téléphone',
    'confirmer_mdp' => 'Confirmer le mot de passe',
    'deja_compte' => 'Déjà un compte ?',
    
    // Vérification
    'verifiez_statut' => 'Vérifiez votre statut',
    'entrez_code_swift' => 'Veuillez entrer le code SWIFT reçu',
    'saisissez_code' => 'Saisissez votre code reçu par Email',
    'verifier' => 'Vérifier',
    'code_incorrect' => 'code incorrect. Aucun accès au statut du virement.',
    
    // Statut virement
    'suivi_virement' => 'Suivi du virement',
    'cher_client' => 'Cher client, veuillez lire attentivement votre suivi !!',
    'virement_en_cours' => 'Virement en cours...',
    'informations_expediteur' => 'Informations sur l\'expéditeur',
    'informations_personnelles' => 'Informations personnelles',
    'informations_bancaires' => 'Informations Bancaires',
    'informations_destinataire' => 'Informations sur le destinataire',
    'informations_virement' => 'Informations du virement',
    'devise' => 'Devise',
    'contact_whatsapp' => 'Contact (WhatsApp):',
    'menu' => 'Menu',
    
    // Langue
    'francais' => 'Français',
    'anglais' => 'English',
];

// ANGLAIS
$lang['en'] = [
    // Navigation
    'accueil' => 'Home',
    'espace_client' => 'Client area',
    'connexion' => 'Login',
    'inscription' => 'Register',
    'mon_compte' => 'My account',
    'verifier_statut' => 'Check status',
    'deconnexion' => 'Logout',
    'a_propos' => 'About',
    'contact' => 'Contact',
    'statut' => 'Status',
    'faq' => 'FAQ',
    'services' => 'Services',
    'temoignages' => 'Testimonials',
    'bonjour' => 'Hello',
    
    // Admin
    'tableau_de_bord' => 'Dashboard',
    'virements' => 'Transfers',
    'nouveau_virement' => 'New transfer',
    'clients' => 'Clients',
    'total_virements' => 'Total transfers',
    'clients_inscrits' => 'Registered clients',
    'en_attente' => 'Pending',
    'aujourd_hui' => 'Today',
    'creer_virement' => 'Create a new transfer',
    'virements_recents' => 'Recent transfers',
    'id' => 'ID',
    'code_swift' => 'SWIFT code',
    'client' => 'Client',
    'montant' => 'Amount',
    'date' => 'Date',
    'statut' => 'Status',
    'actions' => 'Actions',
    'modifier' => 'Edit',
    'voir' => 'View',
    'supprimer' => 'Delete',
    'telecharger_pdf' => 'Download PDF',
    
    // Connexion/Inscription
    'email' => 'Email',
    'mot_de_passe' => 'Password',
    'se_connecter' => 'Login',
    'pas_de_compte' => 'No account yet?',
    'inscrivez_vous' => 'Register',
    'nom' => 'Last name',
    'prenom' => 'First name',
    'telephone' => 'Phone',
    'confirmer_mdp' => 'Confirm password',
    'deja_compte' => 'Already have an account?',
    
    // Vérification
    'verifiez_statut' => 'Check your status',
    'entrez_code_swift' => 'Please enter the SWIFT code received',
    'saisissez_code' => 'Enter your code received by Email',
    'verifier' => 'Verify',
    'code_incorrect' => 'incorrect code. No access to transfer status.',
    
    // Statut virement
    'suivi_virement' => 'Transfer tracking',
    'cher_client' => 'Dear customer, please read your tracking carefully !!',
    'virement_en_cours' => 'Transfer in progress...',
    'informations_expediteur' => 'Sender information',
    'informations_personnelles' => 'Personal information',
    'informations_bancaires' => 'Banking information',
    'informations_destinataire' => 'Recipient information',
    'informations_virement' => 'Transfer information',
    'devise' => 'Currency',
    'contact_whatsapp' => 'Contact (WhatsApp):',
    'menu' => 'Menu',
    
    // Langue
    'francais' => 'French',
    'anglais' => 'English',
];

// Fonction pour traduire
function t($key) {
    global $lang;
    $current_lang = $_SESSION['lang'] ?? 'fr';
    return $lang[$current_lang][$key] ?? $key;
}
?>