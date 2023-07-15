-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 15 juil. 2023 à 13:15
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `basechalets`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` int NOT NULL,
  `nom_activite` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description_activite` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hiver_activite` tinyint(1) NOT NULL,
  `ete_activite` tinyint(1) NOT NULL,
  `fk_region` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `nom_activite`, `description_activite`, `hiver_activite`, `ete_activite`, `fk_region`) VALUES
(3, 'village Québécois d\'antan', 'Un village historique et authentique qui captive l’imaginaire des petits et des grands.', 0, 1, 1),
(4, 'Musée de la biodiversité du Québec', 'Au musée : circuits guidés, expositions, rencontres avec les animaux, sentiers forestiers, un verger, un circuit interactif nocturne et plus!\r\n', 1, 1, 1),
(5, 'L’ÉCHO DES ORIGINES', 'UN PARCOURS INTERACTIF UNIQUE AU QUÉBEC', 0, 1, 2),
(6, 'STATION TOURISTIQUE FLORIBELL – PLAGE', 'Imaginez un endroit où l’on retrouve un lac naturel reconnu pour son eau cristalline et un décor enchanteur. ', 0, 1, 2),
(7, ' Alpagas du Domaine Poissant', 'Bienvenue chez Alpagas du Domaine Poissant ! Vivez des balades inoubliables en compagnie des adorables alpagas.', 0, 1, 3),
(8, ' Parc Safari', 'Venez profiter de l’été au Parc Safari : Visitez le tunnel des félins qui reste un attrait extraordinaire ! ', 0, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int NOT NULL,
  `administrateur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `courriel` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `administrateur`, `mot_de_passe`, `courriel`) VALUES
(1, 'admin', '$2y$10$JgqzBMVBFBVeJjz20cyFH.cIk5wS32dDrF4IvFldh0IhSt8Bt10b.', 'jomesss123@hotmail.com'),
(2, 'admin', '$2y$10$/ggrwaIfQOYaoIxB6/rvC./Cj3haruxtii08H6RmnftAlefCEBWUe', 'jomesss123456789@gmail.com'),
(3, 'root', '$2y$10$/2FapHhpLtAfeXpX66ZLy.HLdDkqyWBoT7TaYS2y5uZAEBRwOCy7W', 'marieyannickboyer01@gmail.com'),
(4, 'jonathan', '$2y$10$wyXeBfSa/eFRmt3XSpCIj..B29LJTzEnZdXxVhn0sm4P0MeVtX3vm', 'jomesss123456789@gmail.com'),
(5, 'jonathan', '$2y$10$P96SnMmPpbpxjj0gLtvQoeIQVxrNt1Tafiq1KY1LzSfsF2mBdnubi', 'jomesss123456789@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `date_avis` date NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_activite` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `nom`, `prenom`, `date_avis`, `description`, `id_activite`) VALUES
(1, 'T', 'Nancy', '2022-10-19', '... costumes & maquillages, beaucoup d\'éclairage avec sons et musique hallucinants et tout ça sur un site exceptionnel.', 3),
(2, 'jade', 'annie', '2021-05-21', 'Que l\'on soit seul, en famille ou en groupe, cette visite est toujours très agréable. Les personnages sont sympathiques et très drôles. Les détails de la vie d\'antan que l\'on découvre sont passionnants. Je recommande à tous!', 3),
(3, 'paul', 'atreide', '2022-05-12', 'Visite lors d\'une activité spéciale de soir. Un parcours ludique et interactif; L\'écho des origines.\r\nLes jeunes ont beaucoup appris sur l\'importance de prendre soin de la biodiversité .', 4),
(4, 'L', 'Virginie', '2022-02-09', 'Nous avons fait le parcours de l Écho des origines. Absolument incroyable! Interactif éducatifs et magnifique. Pour petits et grands. A voir absolument. C est un véritable petit bijou dans notre région. Ça vaut le détour!', 4),
(5, 'p', 'marie', '2022-06-15', 'Heureusement surpris car le site est bien aménagé. Les différents enclos et leurs locataires bien documentés sans nous saturer .\r\nBeaucoup d’endroits assez privés pour pique-niquer .\r\nInstallations sanitaires nombreuses et très propres.\r\nPlusieurs piscines et jeux d’ eau très bien surveillés.\r\nÀ recommander pour une sortie en famille multi-générations.', 8);

-- --------------------------------------------------------

--
-- Structure de la table `chalets`
--

CREATE TABLE `chalets` (
  `id` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `personnes_max` int NOT NULL,
  `prix_haute_saison` int NOT NULL,
  `prix_basse_saison` int NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `date_inscription` date NOT NULL,
  `fk_region` int NOT NULL,
  `id_picsum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chalets`
--

INSERT INTO `chalets` (`id`, `nom`, `description`, `personnes_max`, `prix_haute_saison`, `prix_basse_saison`, `actif`, `promo`, `date_inscription`, `fk_region`, `id_picsum`) VALUES
(1, 'Chalet Havre de paix - Centre-du-Québec', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Centre-du-Québec, dans la liste complète des chalets et dans la liste des chalets promo. ', 12, 165, 150, 1, 1, '2023-06-01', 1, 380),
(2, 'Chalet INACTIF - Centre du Québec', 'Magnifique Chalet. Puisqu\'il est inactif, il ne devrait pas s\'afficher sur le site, dans aucune page. ', 4, 110, 100, 0, 1, '2023-06-02', 1, 10),
(3, 'Chalet Havre de paix - Mauricie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Mauricie, dans la liste complète des chalets et dans la liste des chalets promo. ', 14, 132, 120, 1, 1, '2023-06-03', 2, 13),
(4, 'Chalet Havre de paix - Montérégie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Montérégie, dans la liste complète des chalets et dans la liste des chalets promo. ', 10, 209, 190, 1, 1, '2023-06-04', 3, 14),
(5, 'Chalet Havre de paix - Saguenay-Lac-Saint-Jean', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Saguenay-Lac-St-Jean, dans la liste complète des chalets et dans la liste des chalets promo. ', 12, 214, 195, 1, 1, '2023-06-05', 4, 17),
(6, 'Chalet PAS PROMO - Centre du Québec', 'Magnifique chalet pas en promotion.... Il peut s\'afficher dans la liste des chalets de la région Centre-du-Québec et dans la liste complète des chalets. Il ne doit pas appraître sur l\'accueil, ni dans la liste des chalets en promo. ', 6, 165, 150, 1, 0, '2023-06-06', 1, 28),
(7, 'Chalet INACTIF et PAS PROMO - Centre-du-Québec', 'Magnifique Chalet. Puisqu\'il est inactif, il ne devrait pas s\'afficher sur le site, dans aucune page. ', 6, 236, 215, 0, 0, '2023-06-07', 1, 380),
(8, 'Chalet Sérénité - Centre-du-Québec', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Centre-du-Québec, dans la liste complète des chalets et dans la liste des chalets promo.', 8, 248, 225, 1, 1, '2023-07-02', 1, 380),
(9, 'Chalet Sérénité - Mauricie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Mauricie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 242, 220, 1, 1, '2023-06-09', 2, 380),
(10, 'Chalet Sérénité - Montérégie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Montérégie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 187, 170, 1, 1, '2023-06-10', 3, 380),
(11, 'Chalet Sérénité - Saguenay-Lac-St-Jean', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Saguenay-Lac-St-Jean, dans la liste complète des chalets et dans la liste des chalets promo.', 8, 110, 100, 1, 1, '2023-06-11', 4, 380),
(12, 'Chalet Le paradis perdu - Centre-du-Québec', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Centre-du-Québec, dans la liste complète des chalets et dans la liste des chalets promo.', 10, 214, 195, 1, 1, '2023-06-12', 1, 380),
(13, 'Chalet Le paradis perdu - Mauricie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Mauricie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 126, 115, 1, 1, '2023-06-13', 2, 380),
(14, 'Chalet Le paradis perdu - Montérégie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Montérégie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 214, 195, 1, 1, '2023-06-14', 3, 380),
(15, 'Chalet Le paradis perdu - Saguenay-Lac-St-Jean', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Saguenay-Lac-St-Jean, dans la liste complète des chalets et dans la liste des chalets promo.', 12, 264, 240, 1, 1, '2023-06-15', 4, 380);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `nom`) VALUES
(1, 'Centre-du-Québec'),
(2, 'Mauricie'),
(3, 'Montérégie'),
(4, 'Saguenay–Lac-Saint-Jean ');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `code_utilisateur` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `courriel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `code_utilisateur`, `mot_de_passe`, `courriel`) VALUES
(9, 'admin', '$2y$10$OCPedqtkGSNqeAKwJEUHkO5ElTjdrX8pjibT0SDlK0oP0.GcoPuXW', 'jomesss123@hotmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_region` (`fk_region`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_activite` (`id_activite`);

--
-- Index pour la table `chalets`
--
ALTER TABLE `chalets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chalets_regions` (`fk_region`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `chalets`
--
ALTER TABLE `chalets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `activites_ibfk_1` FOREIGN KEY (`fk_region`) REFERENCES `regions` (`id`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activites` (`id`);

--
-- Contraintes pour la table `chalets`
--
ALTER TABLE `chalets`
  ADD CONSTRAINT `chalets_regions` FOREIGN KEY (`fk_region`) REFERENCES `regions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
