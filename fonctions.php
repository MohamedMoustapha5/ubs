<?php
// fonctions.php - (tout votre code existant + ajout à la fin)

// ... vos fonctions existantes (genererRoutingNumber, etc.) ...

// ========== FONCTIONS DE GESTION DES LOGOS ==========

function createConfigurationTable() {
    global $pdo;
    try {
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS configuration (
                id INT AUTO_INCREMENT PRIMARY KEY,
                cle VARCHAR(100) NOT NULL UNIQUE,
                valeur TEXT,
                date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
                date_modification DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function getActiveLogo() {
    global $pdo;
    
    // Valeur par défaut
    $default_logo = 'images/logo.png';
    
    // Si pas de PDO ou pas de table, retourner défaut
    if (!isset($pdo)) {
        return $default_logo;
    }
    
    try {
        $stmt = $pdo->query("SELECT valeur FROM configuration WHERE cle = 'logo_actif' LIMIT 1");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result && !empty($result['valeur']) && file_exists($result['valeur'])) {
            return $result['valeur'];
        }
        return $default_logo;
    } catch (Exception $e) {
        return $default_logo;
    }
}

function setActiveLogo($logo_path) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM configuration WHERE cle = 'logo_actif'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result['count'] > 0) {
            $stmt = $pdo->prepare("UPDATE configuration SET valeur = ?, date_modification = NOW() WHERE cle = 'logo_actif'");
            return $stmt->execute([$logo_path]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO configuration (cle, valeur, date_creation) VALUES ('logo_actif', ?, NOW())");
            return $stmt->execute([$logo_path]);
        }
    } catch (Exception $e) {
        return false;
    }
}

function getAvailableLogos() {
    $logos = [];
    $directory = __DIR__ . '/images/';
    
    if (!is_dir($directory)) {
        return $logos;
    }
    
    $files = scandir($directory);
    $extensions = ['png', 'jpg', 'jpeg', 'gif', 'webp'];
    
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') continue;
        
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $extensions)) {
            $logos[] = [
                'name' => $file,
                'path' => 'images/' . $file,
                'display_name' => pathinfo($file, PATHINFO_FILENAME)
            ];
        }
    }
    
    return $logos;
}
?>