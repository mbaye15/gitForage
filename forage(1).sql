-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 12 oct. 2018 à 00:05
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forage`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `Id` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateAbonnement` date NOT NULL,
  `Descriptif` varchar(100) NOT NULL,
  `IdClient` int(11) NOT NULL,
  `IdCompteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`Id`, `Numero`, `DateAbonnement`, `Descriptif`, `IdClient`, `IdCompteur`) VALUES
(1, 555, '2018-10-02', '555555555555555555555555', 2, 9),
(2, 2222, '2018-11-04', 'azerty', 2, 13),
(3, 2222, '2018-11-04', 'qwerty', 2, 13);

-- --------------------------------------------------------

--
-- Structure de la table `chefvillage`
--

CREATE TABLE `chefvillage` (
  `Id` int(11) NOT NULL,
  `CIN` varchar(20) DEFAULT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Tel` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chefvillage`
--

INSERT INTO `chefvillage` (`Id`, `CIN`, `Prenom`, `Nom`, `Tel`) VALUES
(8, '1770198701904', 'Souleye', 'TOURE', '779845122'),
(9, '17701975010000', 'opopo', 'opoppoi', '657');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `CIN` varchar(20) DEFAULT NULL,
  `Nom` varchar(20) NOT NULL,
  `Tel` varchar(9) NOT NULL,
  `IdVillage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id`, `CIN`, `Nom`, `Tel`, `IdVillage`) VALUES
(2, '1875555', 'FAYE', '77888888', 3),
(3, '299999999999', 'test88888888', '776450945', 3),
(4, '177017701770', 'ALPHA', '775555555', 5),
(5, '13257788889', 'KALLO BA', '781111111', 3);

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `Id` int(11) NOT NULL,
  `Etat` int(11) DEFAULT NULL,
  `ConsTotale` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compteur`
--

INSERT INTO `compteur` (`Id`, `Etat`, `ConsTotale`) VALUES
(9, 1, 25032),
(13, 0, 1),
(14, 1, 120),
(15, 1, 254000),
(16, 1, 555);

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `Id` int(11) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `ConsChiffre` int(11) NOT NULL,
  `ConsLettre` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `IdCompteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `Id` int(11) NOT NULL,
  `DateFacturation` date NOT NULL,
  `DateEcheance` date NOT NULL,
  `Montant` double NOT NULL,
  `Taxe` double NOT NULL,
  `Paye` enum('0','-1') NOT NULL DEFAULT '0',
  `IdConsommation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `modereglement`
--

CREATE TABLE `modereglement` (
  `Id` int(11) NOT NULL,
  `modereglement` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `Id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`Id`, `code`, `libelle`) VALUES
(1, 'GES', 'GESTIONNAIRE'),
(2, 'OPT', 'OPERATEUR'),
(3, 'ADM', 'ADMINISTRATEUR'),
(4, 'CONS', 'CONSULATION');

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE `reglement` (
  `Id` int(11) NOT NULL,
  `DateReglement` date NOT NULL,
  `Reference` varchar(20) NOT NULL,
  `Montant` double NOT NULL,
  `IdFacture` int(11) NOT NULL,
  `IdModeReglement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `login` varchar(250) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `profession` varchar(150) NOT NULL,
  `IdProfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `prenom`, `nom`, `login`, `passwd`, `profession`, `IdProfil`) VALUES
(4, 'Souleye', 'TOURE', 'admin', 'admin', 'Informaticien', 3),
(5, 'poker', 'Samb', 'msamb', '2f7b52aacfbf6f44e13d27656ecb1f59', 'Informaticien', 3);

-- --------------------------------------------------------

--
-- Structure de la table `village`
--

CREATE TABLE `village` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `IdChefVillage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `village`
--

INSERT INTO `village` (`Id`, `Nom`, `IdChefVillage`) VALUES
(3, 'NIAKHAR', 8),
(5, 'PATAR', 9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdClient` (`IdClient`),
  ADD KEY `IdCompteur` (`IdCompteur`);

--
-- Index pour la table `chefvillage`
--
ALTER TABLE `chefvillage`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdVillage` (`IdVillage`);

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCompteur` (`IdCompteur`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdConsommation` (`IdConsommation`);

--
-- Index pour la table `modereglement`
--
ALTER TABLE `modereglement`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdFacture` (`IdFacture`),
  ADD KEY `IdModeReglement` (`IdModeReglement`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdProfil` (`IdProfil`);

--
-- Index pour la table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdChefVillage` (`IdChefVillage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `chefvillage`
--
ALTER TABLE `chefvillage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `consommation`
--
ALTER TABLE `consommation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modereglement`
--
ALTER TABLE `modereglement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `village`
--
ALTER TABLE `village`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_fk` FOREIGN KEY (`IdClient`) REFERENCES `client` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `abonnement_fk1` FOREIGN KEY (`IdCompteur`) REFERENCES `compteur` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_fk` FOREIGN KEY (`IdVillage`) REFERENCES `village` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_fk` FOREIGN KEY (`IdCompteur`) REFERENCES `compteur` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_fk` FOREIGN KEY (`IdConsommation`) REFERENCES `consommation` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD CONSTRAINT `reglement_fk` FOREIGN KEY (`IdFacture`) REFERENCES `facture` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reglement_fk1` FOREIGN KEY (`IdModeReglement`) REFERENCES `modereglement` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`IdProfil`) REFERENCES `profil` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `village`
--
ALTER TABLE `village`
  ADD CONSTRAINT `village_fk` FOREIGN KEY (`IdChefVillage`) REFERENCES `chefvillage` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
