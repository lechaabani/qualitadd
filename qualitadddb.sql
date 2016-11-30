-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Dim 25 Septembre 2016 à 16:30
-- Version du serveur: 5.6.14
-- Version de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `qualitadddb`
--
CREATE DATABASE IF NOT EXISTS `qualitadddb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `qualitadddb`;

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Responsable` varchar(200) NOT NULL,
  `Origine` varchar(200) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

CREATE TABLE IF NOT EXISTS `campagne` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(250) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Statut` varchar(250) NOT NULL,
  `Date_de_debut` datetime NOT NULL,
  `Date_de_derniere_pause` datetime NOT NULL,
  `Date_de_fin_effective` datetime NOT NULL,
  `Date_de_fin_previsionnelle` datetime NOT NULL,
  `Entites_associees` varchar(250) NOT NULL,
  `Controles_associes` varchar(250) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `campagneentite`
--

CREATE TABLE IF NOT EXISTS `campagneentite` (
  `id_campagne` varchar(30) NOT NULL,
  `id_entite` varchar(30) NOT NULL,
  PRIMARY KEY (`id_campagne`,`id_entite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='relation campagne - entité';

-- --------------------------------------------------------

--
-- Structure de la table `certificat`
--

CREATE TABLE IF NOT EXISTS `certificat` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(250) NOT NULL,
  `Campagne` varchar(250) NOT NULL,
  `Donnee` varchar(200) NOT NULL,
  `Controle` varchar(250) NOT NULL,
  `Critere_de_seuil` varchar(200) NOT NULL,
  `Type_de_critere` varchar(250) NOT NULL,
  `Seuil_Qualite_Moyenne` varchar(250) NOT NULL,
  `Seuil_Qualite_Faible` varchar(250) NOT NULL,
  `Resultat` varchar(250) NOT NULL,
  `Evaluation` varchar(200) NOT NULL,
  `Evaluation_forcee` varchar(200) NOT NULL,
  `Analyse` varchar(200) NOT NULL,
  `Remediation` varchar(250) NOT NULL,
  `Justificatifs` varchar(250) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `constat`
--

CREATE TABLE IF NOT EXISTS `constat` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(250) NOT NULL,
  `Etape` varchar(200) NOT NULL,
  `Priorite` varchar(250) NOT NULL,
  `Applications_concernees` varchar(250) NOT NULL,
  `Responsable` varchar(250) NOT NULL,
  `Cree_le` datetime NOT NULL,
  `Cree_par` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Valide_le` datetime NOT NULL,
  `Valide_par` varchar(250) NOT NULL,
  `Commentaires_du_valideur` varchar(400) NOT NULL,
  `Plans_actions_associes` varchar(200) NOT NULL,
  `Pieces_jointes` varchar(200) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `constatpiecejointe`
--

CREATE TABLE IF NOT EXISTS `constatpiecejointe` (
  `id_constat` varchar(30) NOT NULL,
  `piece` varchar(255) NOT NULL,
  `id_piece` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_piece`),
  KEY `id_constat` (`id_constat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `constatplanaction`
--

CREATE TABLE IF NOT EXISTS `constatplanaction` (
  `id_constat` varchar(30) NOT NULL,
  `id_planaction` varchar(30) NOT NULL,
  PRIMARY KEY (`id_constat`,`id_planaction`),
  KEY `id_constat` (`id_constat`),
  KEY `id_planaction` (`id_planaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='relation constat - plan actions';

-- --------------------------------------------------------

--
-- Structure de la table `controle`
--

CREATE TABLE IF NOT EXISTS `controle` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(250) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Frequence` varchar(200) NOT NULL,
  `Statut` varchar(200) NOT NULL,
  `Responsable` varchar(250) NOT NULL,
  `Application` varchar(400) NOT NULL,
  `Etape` varchar(250) NOT NULL,
  `Actions_a_effectuer_si_anomalie` varchar(250) NOT NULL,
  `Exhaustivite` tinyint(1) NOT NULL,
  `Exactitude` tinyint(1) NOT NULL,
  `Pertinence` tinyint(1) NOT NULL,
  `Donnees_controlees` varchar(200) NOT NULL,
  `Preuves` varchar(200) NOT NULL,
  `Commentaires_preuves` varchar(200) NOT NULL,
  `Documents` varchar(200) NOT NULL,
  `Commentaires_documents` varchar(200) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `controlecampagne`
--

CREATE TABLE IF NOT EXISTS `controlecampagne` (
  `id_controle` varchar(30) NOT NULL,
  `id_campagne` varchar(30) NOT NULL,
  PRIMARY KEY (`id_controle`,`id_campagne`),
  KEY `id_controle` (`id_controle`),
  KEY `id_campagne` (`id_campagne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='relation controle - campagne';

-- --------------------------------------------------------

--
-- Structure de la table `controledonnee`
--

CREATE TABLE IF NOT EXISTS `controledonnee` (
  `id_controle` varchar(30) NOT NULL,
  `id_donnee` varchar(30) NOT NULL,
  PRIMARY KEY (`id_controle`,`id_donnee`),
  KEY `id_controle` (`id_controle`),
  KEY `id_donnee` (`id_donnee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='relation controle - donnee';

-- --------------------------------------------------------

--
-- Structure de la table `diagramme`
--

CREATE TABLE IF NOT EXISTS `diagramme` (
  `Diag` int(1) NOT NULL,
  PRIMARY KEY (`Diag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `donnee`
--

CREATE TABLE IF NOT EXISTS `donnee` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(250) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Code_systeme` varchar(50) NOT NULL,
  `Typologie` varchar(250) NOT NULL,
  `Format` varchar(250) NOT NULL,
  `Granularite` varchar(250) NOT NULL,
  `Application` varchar(250) NOT NULL,
  `Table` varchar(250) NOT NULL,
  `Etape` varchar(200) NOT NULL,
  `Mode_de_production` varchar(250) NOT NULL,
  `Origine` varchar(250) NOT NULL,
  `Frequence_de_mise_a_jour` varchar(250) NOT NULL,
  `Commentaires` varchar(500) NOT NULL,
  `Statut` varchar(250) NOT NULL,
  `Justification` varchar(500) NOT NULL,
  `Priorite` varchar(250) NOT NULL,
  `Donnee_sensible` tinyint(1) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `donneeentite`
--

CREATE TABLE IF NOT EXISTS `donneeentite` (
  `id_donnee` varchar(30) NOT NULL,
  `id_entite` varchar(30) NOT NULL,
  PRIMARY KEY (`id_donnee`,`id_entite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='relation donnee - entité';

-- --------------------------------------------------------

--
-- Structure de la table `donneesource`
--

CREATE TABLE IF NOT EXISTS `donneesource` (
  `id_source` varchar(30) NOT NULL,
  `id_donnee` varchar(30) NOT NULL,
  PRIMARY KEY (`id_source`,`id_donnee`),
  KEY `id_source` (`id_source`) USING BTREE,
  KEY `id_donnee` (`id_donnee`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entite`
--

CREATE TABLE IF NOT EXISTS `entite` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Type` varchar(250) NOT NULL,
  `Entite_parente` varchar(250) NOT NULL,
  `Entites_filles` varchar(250) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `import`
--

CREATE TABLE IF NOT EXISTS `import` (
  `import` int(1) NOT NULL,
  PRIMARY KEY (`import`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `organigramme`
--

CREATE TABLE IF NOT EXISTS `organigramme` (
  `Orga` int(1) NOT NULL,
  PRIMARY KEY (`Orga`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `planaction`
--

CREATE TABLE IF NOT EXISTS `planaction` (
  `Identifiant` varchar(30) NOT NULL,
  `Libelle` varchar(250) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Responsable` varchar(200) NOT NULL,
  `Date_identification` datetime NOT NULL,
  `Campagne` varchar(200) NOT NULL,
  `Source` varchar(200) NOT NULL,
  `Type_amelioration` varchar(200) NOT NULL,
  `Type_de_solution` varchar(250) NOT NULL,
  `Donnees_associees` varchar(250) NOT NULL,
  `Constats_associes` varchar(250) NOT NULL,
  `Anomalies` varchar(250) NOT NULL,
  `Anomalies_constatees` varchar(250) NOT NULL,
  `Date_cible_a_respecter` datetime NOT NULL,
  `Recurrence_prevue` varchar(200) NOT NULL,
  `Applications` varchar(200) NOT NULL,
  `Niveau_de_priorite` varchar(200) NOT NULL,
  `Statut` varchar(250) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `seuil`
--

CREATE TABLE IF NOT EXISTS `seuil` (
  `Identifiant` varchar(30) NOT NULL,
  `Controle` varchar(250) NOT NULL,
  `Critere` varchar(250) NOT NULL,
  `Donnee` varchar(250) NOT NULL,
  `Seuil_Qualite_Faible` varchar(200) NOT NULL,
  `Seuil_Qualite_Moyenne` varchar(250) NOT NULL,
  `Type_de_critere` varchar(250) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='table authentification' AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Identifiant` varchar(30) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Entite` varchar(250) NOT NULL,
  `Habilitations` varchar(250) NOT NULL,
  PRIMARY KEY (`Identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
