-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 05 mars 2022 à 21:19
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `potfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `titre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `id_users`, `titre`) VALUES
(1, 1, 'Visual Design'),
(2, 1, 'Product Development'),
(3, 1, 'WordPress'),
(4, 1, 'Saisir'),
(5, 1, 'Courrir');

-- --------------------------------------------------------

--
-- Structure de la table `competence_pro`
--

CREATE TABLE `competence_pro` (
  `id` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `tache` text NOT NULL,
  `date_deb` varchar(30) NOT NULL,
  `date_fin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competence_pro`
--

INSERT INTO `competence_pro` (`id`, `id_entreprise`, `tache`, `date_deb`, `date_fin`) VALUES
(1, 1, 'Product Engineer', 'Nov 2019', 'Apr 2021'),
(2, 2, 'Sr. UX Designer', 'Nov 2019', 'Apr 2021'),
(3, 3, 'Traking', 'Nov 2019', 'Apr 2021'),
(4, 3, 'See-Video', 'Nov 2019', 'Apr 2021'),
(5, 1, 'Developpeur', 'Aout 2021', 'Février 2022');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `id_users`, `nom`, `address`) VALUES
(1, 1, 'Google', ''),
(2, 1, 'Amazon', ''),
(3, 1, 'Orion', ''),
(4, 1, 'TOTO', 'gboyouentreprise');

-- --------------------------------------------------------

--
-- Structure de la table `folio`
--

CREATE TABLE `folio` (
  `id` int(11) NOT NULL,
  `lien_site` text NOT NULL,
  `lien_img` varchar(255) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `folio`
--

INSERT INTO `folio` (`id`, `lien_site`, `lien_img`, `titre`) VALUES
(2, 'toto.com', '2.png', 'Toto2'),
(3, 'toto.com', '3.png', 'Toto3'),
(4, 'toto.com', '4.png', 'Toto'),
(5, 'toto.com', '5.png', 'Toto'),
(6, 'toto.com', '6.png', 'Toto'),
(7, 'toto.com', '7.png', 'Toto'),
(8, 'toto.com', '8.png', 'Toto'),
(9, 'toto.com', '9.png', 'Toto'),
(10, 'http://bi-etudiant.epizy.com/', '9-folio.jpg', 'Bi-Etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL,
  `code` int(11) DEFAULT NULL,
  `lien` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `pwd`, `code`, `lien`, `description`) VALUES
(1, 'GBOYOU', 'Charles', 'gboyoucharles5@gmail.com', '13488e606ad08547693e0e4c2cb5d9eb', NULL, 'prof.jpg', 'Develop functional user interfaces and provide a valuable experience to customers. Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competence_pro`
--
ALTER TABLE `competence_pro`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `folio`
--
ALTER TABLE `folio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `competence_pro`
--
ALTER TABLE `competence_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `folio`
--
ALTER TABLE `folio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
