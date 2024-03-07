-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 05 mars 2024 à 15:48
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `ID_avis` int NOT NULL,
  `Commentaire` varchar(255) DEFAULT NULL,
  `Note` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `catégorie`
--

CREATE TABLE `catégorie` (
  `ID_categorie` int NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `ID_cours` int NOT NULL,
  `Titre` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Prix` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `instructeur`
--

CREATE TABLE `instructeur` (
  `ID_instructeur` int NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prénom` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `un_cours_a_une_catégorie`
--

CREATE TABLE `un_cours_a_une_catégorie` (
  `ID_cours` int NOT NULL,
  `ID_categorie` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `un_instructeur_a_un_cours`
--

CREATE TABLE `un_instructeur_a_un_cours` (
  `ID_cours` int NOT NULL,
  `ID_instructeur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `un_utilisateur_a_un_avis`
--

CREATE TABLE `un_utilisateur_a_un_avis` (
  `ID_utilisateur` int NOT NULL,
  `ID_avis` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `un_utilisateur_a_un_cours`
--

CREATE TABLE `un_utilisateur_a_un_cours` (
  `ID_utilisateur` int NOT NULL,
  `ID_cours` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_utilisateur` int NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prénom` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Mot_de_passe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`ID_avis`);

--
-- Index pour la table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`ID_categorie`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`ID_cours`);

--
-- Index pour la table `instructeur`
--
ALTER TABLE `instructeur`
  ADD PRIMARY KEY (`ID_instructeur`);

--
-- Index pour la table `un_cours_a_une_catégorie`
--
ALTER TABLE `un_cours_a_une_catégorie`
  ADD PRIMARY KEY (`ID_cours`,`ID_categorie`),
  ADD KEY `ID_categorie` (`ID_categorie`);

--
-- Index pour la table `un_instructeur_a_un_cours`
--
ALTER TABLE `un_instructeur_a_un_cours`
  ADD PRIMARY KEY (`ID_cours`,`ID_instructeur`),
  ADD KEY `ID_instructeur` (`ID_instructeur`);

--
-- Index pour la table `un_utilisateur_a_un_avis`
--
ALTER TABLE `un_utilisateur_a_un_avis`
  ADD PRIMARY KEY (`ID_utilisateur`,`ID_avis`),
  ADD KEY `ID_avis` (`ID_avis`);

--
-- Index pour la table `un_utilisateur_a_un_cours`
--
ALTER TABLE `un_utilisateur_a_un_cours`
  ADD PRIMARY KEY (`ID_utilisateur`,`ID_cours`),
  ADD KEY `ID_cours` (`ID_cours`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `ID_avis` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `ID_categorie` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `ID_cours` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `instructeur`
--
ALTER TABLE `instructeur`
  MODIFY `ID_instructeur` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_utilisateur` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `un_cours_a_une_catégorie`
--
ALTER TABLE `un_cours_a_une_catégorie`
  ADD CONSTRAINT `un_cours_a_une_catégorie_ibfk_1` FOREIGN KEY (`ID_cours`) REFERENCES `cours` (`ID_cours`),
  ADD CONSTRAINT `un_cours_a_une_catégorie_ibfk_2` FOREIGN KEY (`ID_categorie`) REFERENCES `catégorie` (`ID_categorie`);

--
-- Contraintes pour la table `un_instructeur_a_un_cours`
--
ALTER TABLE `un_instructeur_a_un_cours`
  ADD CONSTRAINT `un_instructeur_a_un_cours_ibfk_1` FOREIGN KEY (`ID_cours`) REFERENCES `cours` (`ID_cours`),
  ADD CONSTRAINT `un_instructeur_a_un_cours_ibfk_2` FOREIGN KEY (`ID_instructeur`) REFERENCES `instructeur` (`ID_instructeur`);

--
-- Contraintes pour la table `un_utilisateur_a_un_avis`
--
ALTER TABLE `un_utilisateur_a_un_avis`
  ADD CONSTRAINT `un_utilisateur_a_un_avis_ibfk_1` FOREIGN KEY (`ID_utilisateur`) REFERENCES `utilisateur` (`ID_utilisateur`),
  ADD CONSTRAINT `un_utilisateur_a_un_avis_ibfk_2` FOREIGN KEY (`ID_avis`) REFERENCES `avis` (`ID_avis`);

--
-- Contraintes pour la table `un_utilisateur_a_un_cours`
--
ALTER TABLE `un_utilisateur_a_un_cours`
  ADD CONSTRAINT `un_utilisateur_a_un_cours_ibfk_1` FOREIGN KEY (`ID_utilisateur`) REFERENCES `utilisateur` (`ID_utilisateur`),
  ADD CONSTRAINT `un_utilisateur_a_un_cours_ibfk_2` FOREIGN KEY (`ID_cours`) REFERENCES `cours` (`ID_cours`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
