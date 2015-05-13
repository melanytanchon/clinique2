-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 13 Mai 2015 à 10:56
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `clinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte_rendu`
--

CREATE TABLE IF NOT EXISTS `compte_rendu` (
  `idCR` int(11) NOT NULL,
  `idConsultation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE IF NOT EXISTS `consultation` (
  `idConsultation` int(11) NOT NULL AUTO_INCREMENT,
  `idMedecin` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL,
  `idSpe` int(11) NOT NULL,
  `date` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cr` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idConsultation`),
  UNIQUE KEY `idConsultation` (`idConsultation`),
  UNIQUE KEY `idMedecin` (`idSpe`,`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `consultation`
--

INSERT INTO `consultation` (`idConsultation`, `idMedecin`, `idPatient`, `idSpe`, `date`, `cr`) VALUES
(44, 49, 4, 0, '12/04/2015', 'test'),
(45, 49, 4, 0, '12/02/2015', 'blabla'),
(47, 49, 2, 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `idMedecin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `accepte` tinyint(1) NOT NULL DEFAULT '0',
  `idSpe` int(11) NOT NULL,
  `idQuestionnaire` tinyint(1) NOT NULL,
  `administrateur` tinyint(4) NOT NULL,
  PRIMARY KEY (`idMedecin`),
  KEY `idMedecin` (`idMedecin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`idMedecin`, `nom`, `prenom`, `mail`, `pwd`, `accepte`, `idSpe`, `idQuestionnaire`, `administrateur`) VALUES
(48, '', '', '', '', 0, 0, 1, 0),
(49, 'Duroux', 'Jeanne', 'jeanne.duroux@gmail.fr', '000', 1, 1, 1, 1),
(51, 'cha', 'cha', 'cha@r.fr', 'e0c9035898dd52fc65c41454cec9c4', 1, 0, 1, 0),
(54, 'tanchon', 'melany', 't@h.f', 'test2', 1, 0, 1, 0),
(59, 'r', 'c', 'rc@h.f', '0000', 0, 0, 0, 0),
(60, 'tanchon', 'm', 'test@h.f', '0', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `idPatient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `accepte` tinyint(1) NOT NULL DEFAULT '0',
  `idMedecin` int(11) NOT NULL,
  `idSpe` int(11) NOT NULL,
  `idQuestionnaire` int(11) NOT NULL,
  PRIMARY KEY (`idPatient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`idPatient`, `nom`, `prenom`, `mail`, `pwd`, `accepte`, `idMedecin`, `idSpe`, `idQuestionnaire`) VALUES
(2, 'Rame', 'Charlotte', 'r@h.f', '01', 1, 49, 0, 1),
(3, 'Tanchon', 'M', 't@h.f', '04', 1, 49, 0, 1),
(4, 'T', 'M', 'test@h.f', '03', 1, 49, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `idQuestionnaire` int(11) NOT NULL AUTO_INCREMENT,
  `idPatient` int(11) NOT NULL,
  `idDescription` int(11) NOT NULL,
  `age` int(3) NOT NULL,
  `fumeur` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexe` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `antecedent` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idMedecin` int(11) NOT NULL,
  `saisie` tinyint(1) NOT NULL,
  UNIQUE KEY `idQuestionnaire` (`idQuestionnaire`),
  UNIQUE KEY `idPatient` (`idPatient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `questionnaire`
--

INSERT INTO `questionnaire` (`idQuestionnaire`, `idPatient`, `idDescription`, `age`, `fumeur`, `sexe`, `antecedent`, `idMedecin`, `saisie`) VALUES
(17, 2, 0, 15, 'Non', '', 'ras', 49, 0),
(18, 3, 0, 3, 'Oui', 'F', '', 49, 1);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `idSpe` int(11) NOT NULL AUTO_INCREMENT,
  `nomSpe` varchar(30) NOT NULL,
  PRIMARY KEY (`idSpe`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`idSpe`, `nomSpe`) VALUES
(1, 'gynecologie'),
(3, 'rhumatologie'),
(4, 'gastrologie'),
(5, 'cardiologie');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
