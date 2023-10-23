-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 17 oct. 2023 à 16:14
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

CREATE TABLE `annuaire` (
  `id_annuaire` int(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `telephone` int(10) NOT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `codepostal` int(5) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `sexe` enum('m','f') NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `annuaire`
--

INSERT INTO `annuaire` (`id_annuaire`, `nom`, `prenom`, `telephone`, `profession`, `ville`, `codepostal`, `adresse`, `date_de_naissance`, `sexe`, `description`) VALUES
(1, 'Test', 'Test', 622222222, NULL, NULL, NULL, NULL, NULL, 'm', NULL),
(2, 'Test', 'Test', 644444444, NULL, NULL, NULL, NULL, NULL, 'm', NULL),
(3, 'Test', 'Test', 644444444, NULL, NULL, NULL, NULL, NULL, 'm', NULL),
(4, '2', '2', 660606060, NULL, NULL, NULL, NULL, NULL, 'm', NULL),
(5, 'Test', 'test', 655455454, NULL, NULL, NULL, NULL, NULL, 'm', NULL),
(6, 'Test', 'test', 655454545, 'Test', 'Test', NULL, 'Test', NULL, 'm', NULL),
(7, 'Test', 'test', 655454545, 'Test', 'Test', NULL, 'Test', '2023-10-11', 'm', 'Je test le test pour tester un test'),
(8, 'Test', 'test', 655454545, 'Test', 'Test', 0, 'Test', '2023-10-11', 'm', 'Je test le test pour tester un test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annuaire`
--
ALTER TABLE `annuaire`
  ADD PRIMARY KEY (`id_annuaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annuaire`
--
ALTER TABLE `annuaire`
  MODIFY `id_annuaire` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
