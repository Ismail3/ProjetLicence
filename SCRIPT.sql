-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  Dim 28 avr. 2019 à 05:09
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `autoMarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(10) UNSIGNED NOT NULL,
  `titre` text,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prix` text,
  `marque` text,
  `modele` text,
  `annee` text,
  `carburant` text,
  `boite_vitesse` text,
  `kilometrage` text,
  `carte_grise` text NOT NULL,
  `controle_technique` text NOT NULL,
  `kit_de_distribution` text,
  `kit_embrayage` text,
  `volant_moteur` text,
  `turbo` text,
  `plaquette_frein` text,
  `vidange` text NOT NULL,
  `batterie` text,
  `filtre_air` text,
  `filtre_huile` text,
  `filtre_carburant` text NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `date_publication`, `prix`, `marque`, `modele`, `annee`, `carburant`, `boite_vitesse`, `kilometrage`, `carte_grise`, `controle_technique`, `kit_de_distribution`, `kit_embrayage`, `volant_moteur`, `turbo`, `plaquette_frein`, `vidange`, `batterie`, `filtre_air`, `filtre_huile`, `filtre_carburant`, `description`) VALUES
(3, 'Vends une 208 HDI en très bon état', '2019-03-18 12:48:12', '8500', 'Peugeot', '208', '2014', 'Diesel', 'Manuelle', '86365 km', '', '0', 'En service', 'Hors servise', 'A vérifier', 'En service', 'En service', '0', 'En service', 'A verifier', 'En service', '', ''),
(4, 'Belle peugeot à saisir', '2019-03-24 17:01:55', '1000 ', 'Peugeot', '308', '2015', 'Essence', 'Automatique', '96000', '', '', 'à jour', 'Hors service', 'à jour', 'à jour', 'à jour', 'à refaire', 'à jour', 'Hors service', 'Hors service', 'à jour', ''),
(5, 'Peugeot Automatique à vendre', '2019-03-24 17:05:04', '1000 ', 'Peugeot', '308', '2015', 'Essence', 'Automatique', '96000', 'à jour', 'mois de 6 mois', 'à jour', 'Hors service', 'à jour', 'à jour', 'à jour', 'à refaire', 'à jour', 'Hors service', 'Hors service', 'à jour', ''),
(12, 'Vends une mégane sport en très bon état', '2019-03-25 14:13:23', '7900', 'Renault', 'Mégane', '2019', 'Essence', 'Manuelle', '120500', 'Ajour', 'Sans controle technique', 'Parcouru 20000Km', 'Problème au niveau de la butée', '', 'En service', 'OK', 'OK', 'A prevoir', 'ok', 'ok', 'ok', '');

-- --------------------------------------------------------

--
-- Structure de la table `modifier_annonce`
--

CREATE TABLE `modifier_annonce` (
  `id_user` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `date_modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `repondre_annonce`
--

CREATE TABLE `repondre_annonce` (
  `id_user` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `date_reponse` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `login` text,
  `motdepasse` text,
  `nom` text,
  `prenom` text,
  `email` text,
  `tel` text,
  `adresse` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `login`, `motdepasse`, `nom`, `prenom`, `email`, `tel`, `adresse`) VALUES
(3, 'Alex', 'Alex', 'Duboi', 'Alex', 'alex.duboi@gmail.com', '0123456789', 'Montpellier'),
(2, 'Ismail', 'ismail', 'Alaoui', 'Ismail', 'ismail34alaoui@gmail.com', '123456798', 'Montpellier'),
(7, 'm', '123', 'j', 'l', 'dff@ggh.com', '089876', 'KH'),
(6, 'paulcauvin', '123', 'CAUVIN', 'Paul', 'paul.cauvin@gmail.com', '0762634430', 'avenue mende');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`);

--
-- Index pour la table `modifier_annonce`
--
ALTER TABLE `modifier_annonce`
  ADD PRIMARY KEY (`id_user`,`id_annonce`);

--
-- Index pour la table `repondre_annonce`
--
ALTER TABLE `repondre_annonce`
  ADD PRIMARY KEY (`id_user`,`id_annonce`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
