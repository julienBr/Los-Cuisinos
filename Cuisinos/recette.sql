-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Octobre 2017 à 11:54
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `tj_cat_rct`
--

CREATE TABLE `tj_cat_rct` (
  `CAT_ID` bigint(20) UNSIGNED NOT NULL,
  `RCT_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tj_cat_rct`
--

INSERT INTO `tj_cat_rct` (`CAT_ID`, `RCT_ID`) VALUES
(1, 3),
(1, 6),
(1, 9),
(2, 4),
(2, 7),
(2, 10),
(3, 5),
(3, 8),
(3, 11);

-- --------------------------------------------------------

--
-- Structure de la table `tj_igd_rct_uni`
--

CREATE TABLE `tj_igd_rct_uni` (
  `RCT_ID` bigint(20) UNSIGNED NOT NULL,
  `IGD_ID` bigint(20) UNSIGNED NOT NULL,
  `UNI_ID` varchar(30) NOT NULL,
  `IGD_RCT_UNI_QUANTITE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_cat`
--

CREATE TABLE `t_categorie_cat` (
  `CAT_ID` bigint(20) UNSIGNED NOT NULL,
  `CAT_LABEL` varchar(255) NOT NULL,
  `CAT_DESCRIPTION` mediumtext NOT NULL,
  `CAT_ILLUSTRATION` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_categorie_cat`
--

INSERT INTO `t_categorie_cat` (`CAT_ID`, `CAT_LABEL`, `CAT_DESCRIPTION`, `CAT_ILLUSTRATION`) VALUES
(1, 'Entrées', 'Toutes nos entrées', 'entree.png'),
(2, 'Plats', 'Tous nos plats chauds', 'plat.png'),
(3, 'Desserts', 'Tous nos desserts', 'dessert.png');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire_com`
--

CREATE TABLE `t_commentaire_com` (
  `COM_ID` bigint(20) UNSIGNED NOT NULL,
  `COM_TEXTE` mediumtext NOT NULL,
  `COM_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UTI_ID` bigint(20) UNSIGNED DEFAULT NULL,
  `RCT_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_ingredient_igd`
--

CREATE TABLE `t_ingredient_igd` (
  `IGD_ID` bigint(20) UNSIGNED NOT NULL,
  `IGD_LABEL` varchar(255) NOT NULL,
  `IGD_DESCRIPTION` mediumtext,
  `IGD_ILLUSTRATION` varchar(80) DEFAULT NULL,
  `IGD_VALIDE` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_ID` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_ingredient_igd`
--

INSERT INTO `t_ingredient_igd` (`IGD_ID`, `IGD_LABEL`, `IGD_DESCRIPTION`, `IGD_ILLUSTRATION`, `IGD_VALIDE`, `UTI_ID`) VALUES
(1, 'galettes de tofu à l’indienne Tossolia', NULL, NULL, 1, 1),
(2, 'melons à point', NULL, NULL, 1, 1),
(3, 'citron vert', NULL, NULL, 1, 1),
(4, 'coriandre ciselée', NULL, NULL, 1, 1),
(5, 'huile d’olive', NULL, NULL, 1, 1),
(6, 'fromage Bresse Bleu', NULL, NULL, 1, 1),
(7, 'filet mignon de porc', NULL, NULL, 1, 1),
(8, 'champignons de Paris', NULL, NULL, 1, 1),
(9, 'persil plat ciselé', NULL, NULL, 1, 1),
(10, 'Beurre', NULL, NULL, 1, 1),
(11, 'Crème fraîche', NULL, NULL, 1, 1),
(12, 'Sel', NULL, NULL, 1, 1),
(13, 'Poivre', NULL, NULL, 1, 1),
(14, 'pêches', NULL, NULL, 1, 1),
(15, 'Miel', NULL, NULL, 1, 1),
(16, 'Fleur d’oranger', NULL, NULL, 1, 1),
(17, 'Betterave cuite', NULL, NULL, 1, 2),
(18, 'Noisettes', NULL, NULL, 1, 2),
(19, 'Huile d’olive à la truffe', NULL, NULL, 1, 2),
(20, 'Vinaigre balsamique', NULL, NULL, 1, 2),
(21, 'Moutarde', NULL, NULL, 1, 2),
(22, 'Gousse d’ail', NULL, NULL, 1, 2),
(23, 'Ciboulette', NULL, NULL, 1, 2),
(24, 'Sel', NULL, NULL, 1, 2),
(25, 'Poivre', NULL, NULL, 1, 2),
(26, 'Gigot d’agneau', NULL, NULL, 1, 2),
(27, 'Bière brune', NULL, NULL, 1, 2),
(28, 'Oignons', NULL, NULL, 1, 2),
(29, 'Beurre', NULL, NULL, 1, 2),
(30, 'Farine', NULL, NULL, 1, 2),
(31, 'Carottes', NULL, NULL, 1, 2),
(32, 'Persil', NULL, NULL, 1, 2),
(33, 'Bouquet garni', NULL, NULL, 1, 2),
(34, 'Spéculoos', NULL, NULL, 1, 2),
(35, 'Bouillon cube de viande', NULL, NULL, 1, 2),
(36, 'Mascarpone', NULL, NULL, 1, 2),
(37, 'Œufs', NULL, NULL, 1, 2),
(38, 'Sucre', NULL, NULL, 1, 2),
(39, 'Purée de pistache', NULL, NULL, 1, 2),
(40, 'Sirop de grenadine', NULL, NULL, 1, 2),
(41, 'Eau', NULL, NULL, 1, 2),
(42, 'Biscuits à la cuillère', NULL, NULL, 1, 2),
(43, 'Cerises dénoyautées', NULL, NULL, 1, 2),
(44, 'Pistaches concassées', NULL, NULL, 1, 2),
(45, 'crevettes', NULL, NULL, 1, 3),
(46, 'Ricotta', NULL, NULL, 1, 3),
(47, 'Cœurs d’artichaut', NULL, NULL, 1, 3),
(48, 'Bouquet de ciboulette', NULL, NULL, 1, 3),
(49, 'Sel', NULL, NULL, 1, 3),
(50, 'Poivre', NULL, NULL, 1, 3),
(51, 'champignons', NULL, NULL, 1, 3),
(52, 'Oignons', NULL, NULL, 1, 3),
(53, 'Escalopes de dindes', NULL, NULL, 1, 3),
(54, 'Vin blanc', NULL, NULL, 1, 3),
(55, 'Eau', NULL, NULL, 1, 3),
(56, 'Huile d’olive', NULL, NULL, 1, 3),
(57, 'perles du japon', NULL, NULL, 1, 3),
(58, 'Lait écrémé', NULL, NULL, 1, 3),
(59, 'Lait de coco', NULL, NULL, 1, 3),
(60, 'Sirop d’agave', NULL, NULL, 1, 3),
(61, 'Framboises fraîches', NULL, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_recette_rct`
--

CREATE TABLE `t_recette_rct` (
  `RCT_ID` bigint(20) UNSIGNED NOT NULL,
  `RCT_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `RCT_TITRE` varchar(80) NOT NULL,
  `RCT_DESCRIPTION` longtext NOT NULL,
  `RCT_PREPARATION` longtext NOT NULL,
  `RCT_TEMPS_PREPARATION` time NOT NULL,
  `RCT_TEMPS_CUISSON` time DEFAULT '00:00:00',
  `RCT_TEMPS_REPOS` time DEFAULT '00:00:00',
  `RCT_DIFFICULTE` enum('facile','moyen','difficile') NOT NULL DEFAULT 'facile',
  `RCT_COUT` enum('faible','moyen','eleve') NOT NULL DEFAULT 'faible',
  `RCT_STATUT` enum('brouillon','soumise','finale') NOT NULL DEFAULT 'brouillon',
  `RCT_ILLUSTRATION` varchar(80) NOT NULL,
  `UTI_ID` bigint(20) UNSIGNED NOT NULL,
  `RCT_NBPERSONNE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_recette_rct`
--

INSERT INTO `t_recette_rct` (`RCT_ID`, `RCT_DATE`, `RCT_TITRE`, `RCT_DESCRIPTION`, `RCT_PREPARATION`, `RCT_TEMPS_PREPARATION`, `RCT_TEMPS_CUISSON`, `RCT_TEMPS_REPOS`, `RCT_DIFFICULTE`, `RCT_COUT`, `RCT_STATUT`, `RCT_ILLUSTRATION`, `UTI_ID`, `RCT_NBPERSONNE`) VALUES
(3, '2017-10-05 22:00:00', 'Soupe de melon glacée à la coriandre, topping galettes au tofu à l’indienne', 'Voici une jolie recette qui nous permet de nous régaler avec les derniers melons de la saison.', '1. Coupez les melons en deux, prélevez la chair puis mixez-la avec le jus de citron ainsi qu’une pincée de sel et de poivre. Vous pouvez rajouter un peu d’eau dans le blender pour rectifier la consistance. Pensez à conserver les écorces pour le dressage.\r\n2. Une fois la consistance onctueuse et homogène obtenue, ajoutez la coriandre puis mixez à nouveau.\r\n3. Réfrigérez pour deux heures au minimum. Dressez ensuite la soupe glacée dans des bols ou dans les écorces de melon. Emiettez les galettes de tofu, puis faites-les dorer dans une poêle huilée quelques minutes. Parsemez cette préparation sur les soupes de melon. Dégustez aussitôt.', '00:20:00', NULL, '02:00:00', 'facile', 'faible', 'finale', 'soupeMelon.png', 1, 6),
(4, '2017-10-05 22:00:00', 'Filet mignon de porc rôti au Bresse Bleu, façon Orloff', 'La recette traditionnelle du rôti orloff est un rôti de veau garni de tranches de bacon et de gruyère. Les cuisiniers de Bresse bleu revisite cette recette en insérant des tranches de fromage bleu de Bresse avec la duxelles de champignons. Absolument gourmand !', '1. Dans une sauteuse, faites colorer le filet mignon avec 20 g de beurre, sel et poivre. Faites cuire 10 min en retournant régulièrement, puis laissez refroidir.\r\n2. Emincez la moitié des champignons en lamelles, réservez. Hachez l’autre moitié au couteau, faites de même avec les échalotes.\r\n3. Faites suer les échalotes 3 min dans une casserole avec 50 g de beurre sur feu moyen, ajoutez ensuite les champignons hachés, sel et poivre. Laissez cuire encore 15 minutes en remuant régulièrement, vous obtiendrez une préparation presque sèche, une duxelles.\r\n4. Hors du feu ajoutez le persil et la moitié du Bresse Bleu en dés. Mélangez bien et laissez refroidir.\r\n5. Dans une poêle faites sauter les lamelles de champignons avec 30 g de beurre jusqu’à ce quelles soient dorées.\r\n6. Placez-les au fond d’un petit plat à four.\r\n7. Coupez le restant de Bresse Bleu en lamelles, environ 10.\r\n8. Préchauffez le four à 150°C (th.5).\r\n9. Découpez le filet mignon en 8 tranches. Entre chaque tranche mettez une lamelle de Bresse Bleu et une portion de duxelles puis reformez le filet mignon. Déposez dans le plat à four, nappez de crème fraiche puis mettez le reste de tranches de Bresse Bleu.\r\n10. Mettez au four pour 5 à 10 minutes le rôti doit être doré.', '00:25:00', '00:30:00', NULL, 'facile', 'faible', 'brouillon', 'filetMignon.png', 1, 6),
(5, '2017-10-05 22:00:00', 'Salade de pêches à la fleur d’oranger', 'C’est parfois simple de se régaler : cette salade de fruits très facile à faire sera délicieuse grâce à l’ajout d’eau de fleur d’oranger. Elle va à merveille avec le goût des pêches et apporte le petit plus de la recette. En plus, manger des fruits crus est très bon pour le corps car ils sont riches en vitamines, anti-oxydants et minéraux. Pour une version vegan, remplacez le miel par du sirop d’agave.', '1. Coupez les pêches en fines tranches.\r\n2. Dans une poêle, faites chauffer le miel et l’eau de fleur d’oranger avec 2 cuillères à soupe d’eau.\r\n3. Ajoutez les pêches et laissez-les cuire 3 min pour qu’elles deviennent fondantes.\r\n4. Réservez 30 min au frais avant de servir.\r\n\r\nMon conseil : ajoutez des lamelles d’abricots et saupoudrez de pistaches finement mixées.', '00:10:00', '00:05:00', '00:30:00', 'facile', 'faible', 'brouillon', 'saladePeche.png', 1, 4),
(6, '2017-10-05 22:00:00', 'Mousse de betterave aux noisettes', 'Voici de quoi bluffer vos invités, avec cette recette de mousse salée au bon goût de betterave, idéale pour l’apéritif.', '1. A l’aide d’un blender, mixez l’ensemble des ingrédients excepté les noisettes.\r\n2. Versez cette préparation dans des verrines.\r\n3. Concassez les noisettes, puis saupoudrez de noisettes concassées chaque verrine. Réservez au frais jusqu’au moment de servir.', '00:10:00', NULL, NULL, 'facile', 'faible', 'brouillon', 'mousseBetterave.png', 2, 2),
(7, '2017-10-05 22:00:00', 'Cocotte d’agneau à la bière brune et aux spéculoos', 'Avec l’arrivée du printemps, vous allez bientôt pouvoir cuisiner de l’agneau. Voici une recette aux saveurs du Nord avec de la bière et des speculoos, façon carbonade flamande.', '1. Coupez l’agneau en cubes, puis faites chauffer dans une poêle le reste de beurre et faites-y colorer rapidement les morceau d’agneau sur feu vif, salez et poivrez puis sortez les morceaux d’agneau.\r\n2. Versez une peu de bière dans la poêle et grattez les sucs de cuisson de la viande.\r\n3. Faites chauffer une cocotte avec la moitié du beurre, hachez les oignons et faites les blondir sur feu doux à couvert quelques minutes.\r\n4. Saupoudrez les oignons avec la farine mélangez bien et versez 20 cl d’eau, mélangez puis ajoutez l’agneau, les sucs de cuisson, le reste de bière, la moutarde, le bouquet garni et le cube de bouillon émietté, couvrez et laissez mijoter 1 heure sur feu très doux.\r\n5. Coupez les carottes en grosses rondelles puis ajoutez les ainsi que les speculoos concassés, mélangez et prolongez la cuisson de 30 minutes.\r\n6. La viande doit pouvoir se couper à la fourchette, si besoin poursuivez la cuisson, ajustez l’assaisonnement et servez parsemé de persil haché et accompagné d’une purée de pomme de terre ou de frites.', '00:25:00', '01:30:00', NULL, 'facile', 'faible', 'brouillon', 'cocotteAgneau.png', 2, 4),
(8, '2017-10-05 22:00:00', 'Tiramisu pistaches cerises', 'La pâte de pistache est très parfumée et odorante. Elle permet de donner une douce saveur de pistaches à vos desserts comme dans ce tiramisu.', '1. Séparez les blancs des jaunes d’œufs.\r\n2. Dans un saladier, mélangez les jaunes d’œufs avec le sucre jusqu’à ce qu’ils blanchissent. Ajoutez la purée de pistache puis le mascarpone.\r\n3. Battez les blancs en neige ferme. Incorporez-les au mélange précédent.\r\n4. Versez le sirop et l’eau dans un bol. Trempez-y rapidement les biscuits à la cuillère un par un. Tapissez le fond des verrines avec les biscuits.\r\n5. Répartissez les cerises sur les biscuits.\r\n6. Répartissez la crème au mascarpone dans les verrines puis saupoudrez de pistaches concassées.\r\n7. Réservez au frais 2 h avant de servir.', '00:20:00', NULL, '02:00:00', 'facile', 'faible', 'brouillon', 'tiramisuPistachesCerises.png', 2, 6),
(9, '2017-10-05 22:00:00', 'Fonds d’artichauts garnis aux crevettes et fromage frais', 'Une entrée fraîche et originale parfaite quand on ne veut allumer le four !', '1. Réservez 6 crevettes et coupez le reste en rondelles.\r\n2. Dans un bol, mélangez la ricotta, avec de la ciboulette ciselée, du sel et du poivre. A l’aide d’une fourchette ajoutez les crevettes et mélangez.\r\n3. Egouttez les fonds d’artichaut et remplissez-les avec la ricotta aux crevettes.\r\n4. Décorez avec les crevettes restantes, de la ciboulette et servez.', '00:15:00', NULL, NULL, 'facile', 'faible', 'brouillon', 'fondsArtichauts.png', 3, 6),
(10, '2017-10-05 22:00:00', 'Ballotins de volaille, duxelles de champignons', 'Si vous cherchez une recette pas chère pour le repas de Noël, celle-ci sera parfaite ! Un filet de dinde, des champignons et une pointe de vin blanc suffisent à faire un plat festif et délicieux. Vous pouvez aussi le faire avec des escalopes de veau et des cèpes pour un plat encore plus festif.', '1. Coupez les oignons et les champignons en petits dés.\r\n2. Faites rissoler les oignons dans une poêle avec un filet d’huile d’olive, lorsqu’ils sont dorés ajoutez les champignons faites revenir puis couvrez et laissez cuire 5 minutes.\r\n3. Sur une planche à découper étalez les filets de dinde à l’aide d’un rouleau à pâtisserie, pour cela vous pouvez recouvrir le filet de dinde d’une feuille de film alimentaire.\r\n4. Etalez la duxelles sur les filets de dinde et roulez-les, entourez d’une ficelle de cuisine.\r\n5. Faites cuire les roulés de dinde dans une sauteuse avec un filet d’huile d’olive laissez cuire quelques minutes, puis retournez les roulés ajoutez le vin et l’eau, couvrez faites cuire 5 à 10 minutes à couvert à petit feu.\r\n6. Servez avec des pommes dauphines.', '00:30:00', '00:20:00', NULL, 'facile', 'faible', 'brouillon', 'ballotinVolaille.png', 3, 4),
(11, '2017-10-05 22:00:00', 'Perles du Japon au lait de coco et framboises', 'A la différence du miel, le sirop d’Agave s’adapte parfaitement à une alimentation vegan. Il possède un pouvoir sucrant très élevé, ce qui permet d’en limiter sa quantité. On l’utilise de plus en plus en pâtisserie, comme dans cette recette par exemple.', '1. Portez à légère ébullition le lait et le lait de coco avec le Sirop d’Agave BIO Pure Via.\r\n2. Une fois chaud, versez les perles du Japon dans la casserole et faites cuire à feu doux pendant 20 minutes environ, jusqu’à épaississement du mélange. Les perles deviennent translucides lorsqu’elles sont cuites.\r\n3. Hors du feu, ajoutez les framboises. Garnissez de jolis bols ou verrines de cette préparation et réfrigérez pour 3 heures. Dégustez bien frais.', '00:15:00', NULL, NULL, 'facile', 'faible', 'brouillon', 'perlesJapon.png', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `t_unite_uni`
--

CREATE TABLE `t_unite_uni` (
  `UNI_ID` bigint(20) UNSIGNED NOT NULL,
  `UNI_LABEL` varchar(30) NOT NULL,
  `UNI_SHORT_LABEL` varchar(15) NOT NULL,
  `UNI_DESCRIPTION` mediumtext,
  `UNI_VALIDE` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_unite_uni`
--

INSERT INTO `t_unite_uni` (`UNI_ID`, `UNI_LABEL`, `UNI_SHORT_LABEL`, `UNI_DESCRIPTION`, `UNI_VALIDE`, `UTI_ID`) VALUES
(1, 'Cuillère à soupe', 'cas', NULL, 1, 1),
(2, 'Cuillère à café', 'cac', NULL, 1, 1),
(3, 'Gramme', 'g', NULL, 1, 1),
(4, 'Kilogramme', 'Kg', NULL, 1, 2),
(5, 'Gramme', 'g', NULL, 1, 2),
(6, 'Cuillère à soupe', 'cas', NULL, 1, 2),
(7, 'Cuillère à café', 'cac', NULL, 1, 2),
(8, 'Centilitre', 'cl', NULL, 1, 2),
(9, 'Gramme', 'g', NULL, 1, 3),
(10, 'Centilitre', 'cl', NULL, 1, 3),
(11, 'Cuillère à soupe', 'cas', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur_uti`
--

CREATE TABLE `t_utilisateur_uti` (
  `UTI_ID` bigint(20) UNSIGNED NOT NULL,
  `UTI_LOGIN` varchar(255) NOT NULL,
  `UTI_MAIL` varchar(255) NOT NULL,
  `UTI_NOM` varchar(255) NOT NULL,
  `UTI_PRENOM` varchar(255) NOT NULL,
  `UTI_PASS` varchar(40) NOT NULL,
  `UTI_ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_AVATAR` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_utilisateur_uti`
--

INSERT INTO `t_utilisateur_uti` (`UTI_ID`, `UTI_LOGIN`, `UTI_MAIL`, `UTI_NOM`, `UTI_PRENOM`, `UTI_PASS`, `UTI_ADMIN`, `UTI_AVATAR`) VALUES
(1, 'julienB', 'julien.bringard@outlook.fr', 'Bringard', 'Julien', 'bdff9863d540a6686f9b99466d68d1f35e1f27a2', 1, NULL),
(2, 'alexisD', 'alexis.ducreux@outlook.fr', 'Ducreux', 'Alexis', '1b71f4ff23a956a622bcd14100f02f57a7044435', 1, NULL),
(3, 'compteTest', 'compte.test@outlook.fr', 'Test', 'Compte', 'be9f885cd90fb66095a23e329113af8493c80666', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tj_cat_rct`
--
ALTER TABLE `tj_cat_rct`
  ADD PRIMARY KEY (`CAT_ID`,`RCT_ID`),
  ADD KEY `CAT_ID` (`CAT_ID`),
  ADD KEY `RCT_ID` (`RCT_ID`);

--
-- Index pour la table `tj_igd_rct_uni`
--
ALTER TABLE `tj_igd_rct_uni`
  ADD PRIMARY KEY (`RCT_ID`,`IGD_ID`,`UNI_ID`),
  ADD KEY `RCT_ID` (`RCT_ID`),
  ADD KEY `IGD_ID` (`IGD_ID`),
  ADD KEY `UNI_ID` (`UNI_ID`);

--
-- Index pour la table `t_categorie_cat`
--
ALTER TABLE `t_categorie_cat`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Index pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `RCT_ID` (`RCT_ID`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_ingredient_igd`
--
ALTER TABLE `t_ingredient_igd`
  ADD PRIMARY KEY (`IGD_ID`),
  ADD KEY `IGD_ID` (`IGD_ID`);

--
-- Index pour la table `t_recette_rct`
--
ALTER TABLE `t_recette_rct`
  ADD PRIMARY KEY (`RCT_ID`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_unite_uni`
--
ALTER TABLE `t_unite_uni`
  ADD PRIMARY KEY (`UNI_ID`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
  ADD PRIMARY KEY (`UTI_ID`),
  ADD UNIQUE KEY `UTI_LOGIN` (`UTI_LOGIN`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_categorie_cat`
--
ALTER TABLE `t_categorie_cat`
  MODIFY `CAT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  MODIFY `COM_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_ingredient_igd`
--
ALTER TABLE `t_ingredient_igd`
  MODIFY `IGD_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `t_recette_rct`
--
ALTER TABLE `t_recette_rct`
  MODIFY `RCT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `t_unite_uni`
--
ALTER TABLE `t_unite_uni`
  MODIFY `UNI_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
  MODIFY `UTI_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tj_cat_rct`
--
ALTER TABLE `tj_cat_rct`
  ADD CONSTRAINT `C_FK_CAT_CAT_RCT` FOREIGN KEY (`CAT_ID`) REFERENCES `t_categorie_cat` (`CAT_ID`),
  ADD CONSTRAINT `C_FK_RCT_CAT_RCT` FOREIGN KEY (`RCT_ID`) REFERENCES `t_recette_rct` (`RCT_ID`);

--
-- Contraintes pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD CONSTRAINT `C_FK_RCT_COM` FOREIGN KEY (`RCT_ID`) REFERENCES `t_recette_rct` (`RCT_ID`),
  ADD CONSTRAINT `C_FK_UTI_COM` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

--
-- Contraintes pour la table `t_unite_uni`
--
ALTER TABLE `t_unite_uni`
  ADD CONSTRAINT `C_FK_UNI_UTI` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
