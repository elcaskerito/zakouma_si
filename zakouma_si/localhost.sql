

CREATE TABLE `espece` (
  `id` smallint(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `nom_courant` varchar(40) NOT NULL,
  `nom_latin` varchar(40) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `espece`
--

INSERT INTO `espece` (`id`, `nom_courant`, `nom_latin`, `description`) VALUES
(1, 'Chien', 'Canis canis', 'Bestiole à quatre pattes qui aime les\r\ncaresses et tire souvent la langue'),
(2, 'Chat', 'Felis silvestris', 'Bestiole à quatre pattes qui saute\r\ntrès haut et grimpe aux arbres'),
(3, 'Tortue dHermann', 'Testudo hermanni', 'Bestiole avec une\r\ncarapace très dure'),
(4, 'Perroquet amazone', 'Alipiopsitta xanthops', 'Joli oiseau\r\nparleur vert et jaune');

-- --------------------------------------------------------

--
-- Structure de la table `imagee`
--

CREATE TABLE `imagee` (
  `id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `taille` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `bin` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `imagee`
--


-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `lien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `img`
--

-- --------------------------------------------------------

--
-- Structure de la table `race`
-
CREATE TABLE `race` (
  `id` smallint(5) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `espece_id` smallint(5) UNSIGNED,
  `description` text DEFAULT NULL,
  CONSTRAINT `fk_race_espece_id` FOREIGN KEY (`espece_id`) REFERENCES `espece` (`id`) ON DELETE CASCADE ON UPDATE CASCADE);
--
-- Déchargement des données de la table `race`
--

INSERT INTO `race` (`id`, `nom`, `espece_id`, `description`) VALUES
(1, 'Berger allemand', 1, 'Chien sportif et élégant au pelage\r\ndense, noir-marron-fauve, noir ou gris.'),
(2, 'Berger blanc suisse', 1, 'Petit chien au corps compact, avec des\r\npattes courtes mais bien proportionnées et au pelage tricolore ou\r\nbicolore.'),
(3, 'Boxer', 1, 'Chien de taille moyenne, au poil ras de couleur fauve\r\nou bringé avec quelques marques blanches.'),
(4, 'Bleu russe', 2, 'Chat aux yeux verts et à la robe épaisse et\r\nargentée.'),
(5, 'Maine coon', 2, 'Chat de grande taille, à poils mi-longs.'),
(6, 'Singapura', 2, 'Chat de petite taille aux grands yeux en\r\namandes.'),
(7, 'Sphynx', 2, 'Chat sans poils.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`) VALUES
(1, 'ima@gmail.com', 'admin'),
(2, 'rito@gmail.com', '1234');

--
-- Index pour les tables déchargées
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(70) DEFAULT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `date_naissance` datetime NOT NULL,
  `commentaire` text DEFAULT NULL,
  `espece_id` smallint(5) UNSIGNED ,
  `race_id` smallint(5) UNSIGNED DEFAULT NULL,
  CONSTRAINT `fk_espece_id` FOREIGN KEY (`espece_id`) REFERENCES `espece` (`id`),
  CONSTRAINT `fk_race_id` FOREIGN KEY (`race_id`) REFERENCES `race` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `nom`, `sexe`, `date_naissance`, `commentaire`, `espece_id`, `race_id`) VALUES
(1, 'diablo', 'M', '2012-03-12 00:00:00', 'tres agressif', 2, 4),
(3, 'Ali', 'M', '2021-01-27 00:00:00', 'Toute debut de chose est difficil', 2, 1),
(4, 'Foye', 'M', '2020-12-17 00:00:00', 'Ingénieur', 1, 2),
(5, 'nassir', 'kezjlg', '4231-02-12 00:00:00', 'TJ2KH4T2', 1, 1);


--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD UNIQUE KEY `ind_uni_nom_espece_id` (`nom`,`espece_id`),
  ADD KEY `fk_espece_id` (`espece_id`),
  ADD KEY `fk_race_id` (`race_id`);

--
-- Index pour la table `espece`
--
ALTER TABLE `espece`
  ADD UNIQUE KEY `nom_latin` (`nom_latin`);


ALTER TABLE `race`
  ADD KEY `fk_race_espece_id` (`espece_id`);
  
--
-- ***** Contraintes pour la table `animal`
--COMMIT;
