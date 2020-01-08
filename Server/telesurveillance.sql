-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 08 jan. 2020 à 15:37
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `télésurveillance`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `CNI` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prénom` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(15) NOT NULL,
  `sexe` varchar(30) NOT NULL,
  `poids` int(3) NOT NULL,
  `taille` varchar(6) NOT NULL,
  `sang` varchar(10) NOT NULL,
  `maladie_chronique` varchar(20) NOT NULL,
  `mutuelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`CNI`, `nom`, `prénom`, `email`, `mdp`, `sexe`, `poids`, `taille`, `sang`, `maladie_chronique`, `mutuelle`) VALUES
('D15', 'soussi', 'fati', 'fatisoussi735@gmail.com', '123488', 'f', 86, '146', 'O+', 'aucun', 'oui'),
('D16', 'ahmed', 'motalib', 'ahmed@gmail.com', 'gseii', 'M', 86, '146', 'O+', 'aucun', 'no'),
('D18', 'idrissi', 'hajar', 'kihajari735@gmail.com', '1jgf8', 'f', 86, '1.66', 'A', 'aucun', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `pouls`
--

CREATE TABLE `pouls` (
  `id` int(11) NOT NULL,
  `CNI` varchar(30) NOT NULL,
  `valeur` int(11) NOT NULL,
  `heure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `temperature`
--

CREATE TABLE `temperature` (
  `id` int(200) NOT NULL,
  `CNI` varchar(30) NOT NULL,
  `valeur` varchar(20) NOT NULL,
  `heure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temperature`
--

INSERT INTO `temperature` (`id`, `CNI`, `valeur`, `heure`) VALUES
(4, 'D16', '32', '2020-01-08 13:11:41'),
(5, 'D16', '36', '2020-01-08 13:11:41');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`CNI`);

--
-- Index pour la table `pouls`
--
ALTER TABLE `pouls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_pouls` (`CNI`);

--
-- Index pour la table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNI` (`CNI`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pouls`
--
ALTER TABLE `pouls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pouls`
--
ALTER TABLE `pouls`
  ADD CONSTRAINT `patient_pouls` FOREIGN KEY (`CNI`) REFERENCES `patient` (`CNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `temperature`
--
ALTER TABLE `temperature`
  ADD CONSTRAINT `patient_mesure` FOREIGN KEY (`CNI`) REFERENCES `patient` (`CNI`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
