-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 juin 2020 à 13:36
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdquizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `idQues` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `score` int(11) NOT NULL,
  `choix` varchar(25) NOT NULL,
  PRIMARY KEY (`idQues`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idQues`, `question`, `score`, `choix`) VALUES
(1, 'lamine est', 2, 'multiple'),
(2, 'senegal', 4, 'simple');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `idRep` int(11) NOT NULL AUTO_INCREMENT,
  `idQues` int(11) NOT NULL,
  `reponse` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`idRep`),
  KEY `idQues` (`idQues`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`idRep`, `idQues`, `reponse`, `etat`) VALUES
(1, 1, 'dakar', 1),
(2, 1, 'senegal', 1),
(3, 1, 'paris', 0),
(4, 2, 'afrique', 1),
(5, 2, 'europe', 0),
(6, 2, 'asie', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userlogin` varchar(25) NOT NULL,
  `PWD` varchar(25) NOT NULL,
  `PRENOM` varchar(25) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `ROLE` varchar(10) NOT NULL,
  `PHOTO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `userlogin`, `PWD`, `PRENOM`, `NOM`, `ROLE`, `PHOTO`) VALUES
(22, 'admin', 'admin', 'admin', 'admin', 'admin', NULL),
(23, 'joueur', 'joueur', 'joueur', 'joueur', 'joueur', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
