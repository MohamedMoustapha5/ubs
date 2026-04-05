-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 08 mai 2026 à 12:44
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ubs_users`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartes_virtuelles`
--

DROP TABLE IF EXISTS `cartes_virtuelles`;
CREATE TABLE IF NOT EXISTS `cartes_virtuelles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `numero_carte` varchar(19) NOT NULL,
  `date_expiration` varchar(7) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `nom_titulaire` varchar(100) NOT NULL,
  `type_carte` varchar(20) DEFAULT 'Visa',
  `plafond` decimal(10,2) DEFAULT '5000.00',
  `statut` varchar(20) DEFAULT 'active',
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_carte` (`numero_carte`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cartes_virtuelles`
--

INSERT INTO `cartes_virtuelles` (`id`, `user_id`, `numero_carte`, `date_expiration`, `cvv`, `nom_titulaire`, `type_carte`, `plafond`, `statut`, `date_creation`) VALUES
(1, 1, '5871 1409 4126 4197', '03/29', '137', 'MUSTAPHA', 'Visa', 6000.00, 'active', '2026-03-18 02:09:40'),
(2, 1, '1589 6375 5493 7662', '04/29', '509', 'HAKIMI', 'American Express', 7000.00, 'active', '2026-03-19 10:37:16');

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cle` varchar(100) NOT NULL,
  `valeur` text,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_modification` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cle` (`cle`),
  KEY `cle_2` (`cle`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `configuration`
--

INSERT INTO `configuration` (`id`, `cle`, `valeur`, `date_creation`, `date_modification`) VALUES
(1, 'logo_actif', 'images/logo2.jpg.jpg', '2026-05-08 12:56:42', '2026-05-08 13:41:45');

-- --------------------------------------------------------

--
-- Structure de la table `historique_acces`
--

DROP TABLE IF EXISTS `historique_acces`;
CREATE TABLE IF NOT EXISTS `historique_acces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `virement_id` int NOT NULL,
  `user_id` int NOT NULL,
  `code_swift` varchar(50) NOT NULL,
  `date_acces` datetime DEFAULT CURRENT_TIMESTAMP,
  `ip_adresse` varchar(45) DEFAULT NULL,
  `user_agent` text,
  PRIMARY KEY (`id`),
  KEY `virement_id` (`virement_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `historique_acces`
--

INSERT INTO `historique_acces` (`id`, `virement_id`, `user_id`, `code_swift`, `date_acces`, `ip_adresse`, `user_agent`) VALUES
(1, 9, 1, 'TRX2026000166', '2026-03-18 01:25:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:148.0) Gecko/20100101 Firefox/148.0'),
(2, 9, 1, 'TRX2026000166', '2026-03-19 00:42:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:148.0) Gecko/20100101 Firefox/148.0'),
(3, 1, 1, 'TRX202603164501', '2026-03-19 10:34:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:148.0) Gecko/20100101 Firefox/148.0'),
(4, 2, 8, 'TRX202603169564', '2026-03-19 23:10:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:148.0) Gecko/20100101 Firefox/148.0'),
(5, 9, 1, 'TRX2026000166', '2026-04-04 15:18:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0'),
(6, 9, 7, 'TRX2026000166', '2026-04-05 01:59:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0'),
(7, 9, 1, 'TRX2026000166', '2026-04-14 10:29:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0'),
(8, 9, 1, 'TRX2026000166', '2026-04-24 22:32:45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0');

-- --------------------------------------------------------

--
-- Structure de la table `rib_bancaires`
--

DROP TABLE IF EXISTS `rib_bancaires`;
CREATE TABLE IF NOT EXISTS `rib_bancaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `routing_number` varchar(9) NOT NULL,
  `account_number` varchar(17) NOT NULL,
  `cle_rib` varchar(2) DEFAULT NULL,
  `iban` varchar(34) DEFAULT NULL,
  `swift_code` varchar(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_address` text,
  `beneficiary_name` varchar(100) NOT NULL,
  `beneficiary_address` text,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `rib_bancaires`
--

INSERT INTO `rib_bancaires` (`id`, `user_id`, `routing_number`, `account_number`, `cle_rib`, `iban`, `swift_code`, `bank_name`, `bank_address`, `beneficiary_name`, `beneficiary_address`, `date_creation`) VALUES
(1, 1, '021030155', '705901109230', '61', 'US00021030155705901109230', 'CITIUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', 'MOHAMED MOUSTAPHA', 'USA', '2026-03-19 00:38:02'),
(2, 4, '021027932', '57970949318', '43', 'US0002102793257970949318', 'BOFAUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', 'MOHAMED KAMIL', 'USA', '2026-03-19 00:45:57'),
(3, 3, '021015312', '811320177541', '34', 'US00021015312811320177541', 'UBSWUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', ' ADMINISTRATEUR', 'USA', '2026-03-19 10:22:51'),
(4, 7, '021033142', '0096712242', '42', 'US000210331420096712242', 'WFBIUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', 'ACHRAF HAKIMI', 'USA', '2026-03-19 22:05:54'),
(5, 8, '021050678', '26423490096', '55', 'US02 0210 0012 3456 7890 1234', 'BOFAUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', 'AFSA MAIRA', 'USA', '2026-03-19 23:20:41'),
(6, 9, '021032955', '91593223030', '85', 'US02 0210 0012 3456 7890 1234', 'JPMCUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', 'ABIBA NOURA', 'USA', '2026-03-19 23:22:39'),
(7, 10, '021063899', '0153536059', '03', 'US02 0210 0012 3456 7890 1234', 'BOFAUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', 'JJJJJJJJJJJJ JJJJJJJJJJJJJ', 'USA', '2026-03-19 23:42:28'),
(8, 11, '021051801', '523997449897', '34', 'US02 0210 0012 3456 7890 1234', 'CITIUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', 'AAAAAAAAA AAAAAAAA', 'USA', '2026-03-19 23:48:29'),
(9, 6, '021042535', '49084209697', '94', 'US02 0210 0012 3456 7890 1234', 'JPMCUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', ' ', 'USA', '2026-04-05 02:18:40'),
(10, 2, '021073745', '7388724156', '02', 'US02 0210 0012 3456 7890 1234', 'WFBIUS33XXX', 'UBS Bank USA', '1285 Avenue of the Americas, New York, NY 10019, USA', ' ', 'USA', '2026-04-24 22:30:30');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_inscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(20) DEFAULT 'client',
  `pays` varchar(100) DEFAULT 'USA',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `telephone`, `mot_de_passe`, `date_inscription`, `role`, `pays`) VALUES
(1, 'Moustapha', 'mohamed', 'mustapha@gmail.com', '657626049', '$2y$10$lz/yigurpsVLLE9GK13aguOGoS2ADQOfmUSKQ/B.jiXhAMD3VDQUi', '2026-03-14 17:41:18', 'client', 'USA'),
(3, 'Administrateur', '', 'admin@ubs.com', '0102030405', '$2y$10$UDlg.r0IXbktaFrjaLUfkOa2AQV/MZvp.BkfhLukT2DNkfqJ450AK', '2026-03-15 21:14:46', 'admin', 'USA'),
(6, 'zaguina', 'euro', 'euro@gmail.com', '655892345', '$2y$10$ElnlJjDo/FOO9X304g6zuODdXrzdBuJoqdQfkTfJrNfpTTJdVtRsO', '2026-03-16 15:49:59', 'client', 'USA');

-- --------------------------------------------------------

--
-- Structure de la table `virements`
--

DROP TABLE IF EXISTS `virements`;
CREATE TABLE IF NOT EXISTS `virements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `code_swift` varchar(50) DEFAULT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `expediteur_nom` varchar(100) DEFAULT NULL,
  `expediteur_prenom` varchar(100) DEFAULT NULL,
  `expediteur_pays` varchar(100) DEFAULT NULL,
  `expediteur_numero_aba` varchar(100) DEFAULT NULL,
  `expediteur_numero_compte` varchar(100) DEFAULT NULL,
  `expediteur_nom_banque` varchar(200) DEFAULT NULL,
  `destinataire_nom` varchar(100) DEFAULT NULL,
  `destinataire_prenom` varchar(100) DEFAULT NULL,
  `destinataire_pays` varchar(100) DEFAULT NULL,
  `destinataire_code_banque` varchar(50) DEFAULT NULL,
  `destinataire_code_guichet` varchar(50) DEFAULT NULL,
  `destinataire_numero_compte` varchar(100) DEFAULT NULL,
  `destinataire_nom_banque` varchar(200) DEFAULT NULL,
  `devise` varchar(10) DEFAULT 'USD',
  `montant` decimal(15,2) DEFAULT NULL,
  `motif` text,
  `statut` varchar(50) DEFAULT 'En cours',
  `contact_whatsapp` varchar(50) DEFAULT NULL,
  `message_statut` text,
  `client_email` varchar(100) DEFAULT NULL,
  `pourcentage` int DEFAULT '95',
  `expediteur_bic` varchar(20) DEFAULT 'BKBCGB2L',
  `destinataire_bic` varchar(20) DEFAULT 'UGABGALI',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_swift` (`code_swift`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `virements`
--

INSERT INTO `virements` (`id`, `user_id`, `code_swift`, `date_creation`, `expediteur_nom`, `expediteur_prenom`, `expediteur_pays`, `expediteur_numero_aba`, `expediteur_numero_compte`, `expediteur_nom_banque`, `destinataire_nom`, `destinataire_prenom`, `destinataire_pays`, `destinataire_code_banque`, `destinataire_code_guichet`, `destinataire_numero_compte`, `destinataire_nom_banque`, `devise`, `montant`, `motif`, `statut`, `contact_whatsapp`, `message_statut`, `client_email`, `pourcentage`, `expediteur_bic`, `destinataire_bic`) VALUES
(8, 6, 'TRX2026012166', '2026-03-16 16:51:56', 'euro', 'kash', 'maroc', '136608876638', '10863257126321', 'UBS', 'IRIE BI', 'ZAMBLE', 'CÔTE D\'IVOIRE', '///', '///', 'CI650 01541 014706750009 60', 'BANQUE DES DÉPÔTS DU TRÉSOR', 'USD', 55000.00, 'Chers clients votre virement est en cours et sera disponible dans votre compte après obtention d\'une attestation de conformité. Merci de contacter la direction de conformité pour l\'obtention.', 'En cours', '+33745332562', 'Veuillez noter que le virement sera annulé dans les 72heures si aucun justificatif n\'est fourni !!', 'euro@gmail.com', 60, 'BKBCGB2L', 'UGABGALI'),
(9, 6, 'TRX2026000166', '2026-03-16 17:35:14', 'iniesta', 'zizan', 'espagne', '136608876638', '10863257126321', 'uba', 'IRIE BI', 'ZAMBLE', 'CÔTE D\'IVOIRE', '///', '///', 'CI650 01541 014706750009 60', 'BANQUE DES DÉPÔTS DU TRÉSOR', 'USD', 55000.00, 'Chers clients votre virement est en cours et sera disponible dans votre compte après obtention d\'une attestation de conformité. Merci de contacter la direction de conformité pour l\'obtention.', 'En cours', '+33745332562', 'Veuillez noter que le virement sera annulé dans les 72heures si aucun justificatif n\'est fourni !!', 'euro@gmail.com', 95, 'BKBCGB2L', 'UGABGALI'),
(11, 1, 'TRX2026000213', '2026-03-17 18:08:57', 'toi', 'moi', 'ÉTATS-UNIS', '136608876638', '10863257126321', 'UBS', 'IRIE BI', 'ZAMBLE', 'CÔTE D\'IVOIRE', '///', '///', 'CI650 01541 014706750009 60', 'BANQUE DES DÉPÔTS DU TRÉSOR', 'USD', 55000.00, 'Chers clients votre virement est en cours et sera disponible dans votre compte après obtention d\'une attestation de conformité. Merci de contacter la direction de conformité pour l\'obtention.', 'En cours', '+33745332569', 'Veuillez noter que le virement sera annulé dans les 72heures si aucun justificatif n\'est fourni !!', NULL, 95, 'BKBCGBaa', 'UGABGAoo'),
(12, 6, 'TRX2026012100', '2026-03-17 20:20:54', 'DAVID', 'lllll', 'ÉTATS-UNIS', '136608876638', '10863257126321', 'UBS', 'IRIE BI', 'ZAMBLE', 'CÔTE D\'IVOIRE', '///', '///', 'CI650 01541 014706750009 60', 'BANQUE DES DÉPÔTS DU TRÉSOR', 'USD', 55000.00, 'Chers clients votre virement est en cours et sera disponible dans votre compte après obtention d\'une attestation de conformité. Merci de contacter la direction de conformité pour l\'obtention.', 'En cours', '+33745332562', 'Veuillez noter que le virement sera annulé dans les 72heures si aucun justificatif n\'est fourni !!', '', 70, 'BKBCGB99', 'UGABGA98');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
