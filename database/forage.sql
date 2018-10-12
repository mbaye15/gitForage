-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 07 oct. 2018 à 16:28
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
  `IdClient` varchar(18) NOT NULL,
  `IdCompteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chefvillage`
--

CREATE TABLE `chefvillage` (
  `Id` varchar(18) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Tel` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chefvillage`
--

INSERT INTO `chefvillage` (`Id`, `Prenom`, `Nom`, `Tel`) VALUES
('1', 'Malang', 'CISSE', '778754512'),
('2', 'Babacar', 'MBOW', '784512545');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id` varchar(18) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Tel` varchar(9) NOT NULL,
  `IdVillage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `dni` int(60) NOT NULL,
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  `Apellido` varchar(50) NOT NULL DEFAULT '0',
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cliente`
--

INSERT INTO `cliente` (`id`, `dni`, `Nombre`, `Apellido`, `Correo`, `Telefono`) VALUES
(3, 187555555, '12525', 'azzaazz', 'hjjh', '778888888');

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `Id` int(11) NOT NULL,
  `Etat` enum('0','-1') NOT NULL DEFAULT '0',
  `ConsTotale` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `ModeReglment` varchar(20) NOT NULL,
  `Reference` varchar(20) NOT NULL,
  `Montant` double NOT NULL,
  `IdFacture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
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

INSERT INTO `user` (`id`, `prenom`, `nom`, `login`, `passwd`, `profession`, `IdProfil`) VALUES
(4, 'Souleye', 'TOURE', 'admin', 'admin', 'Informaticien', 3),
(5, 'poker', 'Samb', 'msamb', '2f7b52aacfbf6f44e13d27656ecb1f59', 'Informaticien', 3);

-- --------------------------------------------------------

--
-- Structure de la table `village`
--

CREATE TABLE `village` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `IdChefVillage` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `village`
--

INSERT INTO `village` (`Id`, `Nom`, `IdChefVillage`) VALUES
(1, 'NIAKHAR', '2'),
(2, 'PATAR', '2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdClient` (`IdClient`),
  ADD KEY `IdClient_2` (`IdClient`),
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
-- Index pour la table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`modereglement`);

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
  ADD KEY `ModeReglment` (`ModeReglment`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_fk` FOREIGN KEY (`IdClient`) REFERENCES `client` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_fk` FOREIGN KEY (`IdVillage`) REFERENCES `village` (`Id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD CONSTRAINT `compteur_fk` FOREIGN KEY (`Id`) REFERENCES `abonnement` (`IdCompteur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compteur_fk1` FOREIGN KEY (`Id`) REFERENCES `consommation` (`IdCompteur`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_fk` FOREIGN KEY (`Id`) REFERENCES `facture` (`IdConsommation`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `modereglement`
--
ALTER TABLE `modereglement`
  ADD CONSTRAINT `modereglement_fk` FOREIGN KEY (`modereglement`) REFERENCES `reglement` (`ModeReglment`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD CONSTRAINT `reglement_fk` FOREIGN KEY (`IdFacture`) REFERENCES `facture` (`Id`) ON UPDATE CASCADE;

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
