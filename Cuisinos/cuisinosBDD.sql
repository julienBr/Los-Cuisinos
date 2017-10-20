
CREATE DATABASE IF NOT EXISTS `recette` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use `recette`;

CREATE USER IF NOT EXISTS 'u_recette'@'localhost' IDENTIFIED BY 'SJzEeqLb2HHeNYVV';
GRANT USAGE ON * . * TO 'u_recette'@'localhost' IDENTIFIED BY 'SJzEeqLb2HHeNYVV' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;
GRANT ALL PRIVILEGES ON `recette` . * TO 'u_recette'@'localhost';

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Janvier 2017 à 21:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `recette`
--

-- --------------------------------------------------------

-- Table des utilisateurs
-- DROP TABLE IF EXISTS `T_UTILISATEUR_UTI`;

CREATE TABLE IF NOT EXISTS `T_UTILISATEUR_UTI` (
  `UTI_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `UTI_LOGIN` varchar(255) NOT NULL,
  `UTI_MAIL` varchar(255) NOT NULL,
  `UTI_NOM` varchar(255) NOT NULL,
  `UTI_PRENOM` varchar(255) NOT NULL,
  `UTI_PASS` varchar(40) NOT NULL,
  `UTI_ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_AVATAR` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`UTI_ID`),
  UNIQUE KEY `UTI_LOGIN` (`UTI_LOGIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- Table des unités
-- DROP TABLE IF EXISTS T_UNITE_UNI;
CREATE TABLE IF NOT EXISTS `T_UNITE_UNI` (
  UNI_ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNI_LABEL varchar(30) NOT NULL,
  UNI_SHORT_LABEL varchar(15) NOT NULL,
  UNI_DESCRIPTION mediumtext,
  UNI_VALIDE bool NOT NULL DEFAULT 0,
  UTI_ID  bigint(20) unsigned NOT NULL,
  KEY (UTI_ID),
  PRIMARY KEY (UNI_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- Table des recettes
-- DROP TABLE IF EXISTS T_RECETTE_RCT;
CREATE TABLE IF NOT EXISTS `T_RECETTE_RCT` (
  RCT_ID  bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  RCT_DATE timestamp NOT NULL DEFAULT NOW(), 
  RCT_TITRE varchar(80) NOT NULL,
  RCT_DESCRIPTION longtext NOT NULL,
  RCT_PREPARATION longtext NOT NULL,
  RCT_TEMPS_PREPARATION time NOT NULL,
  RCT_TEMPS_CUISSON time NULL DEFAULT '00:00:00',
  RCT_TEMPS_REPOS time  NULL DEFAULT '00:00:00',
  RCT_DIFFICULTE ENUM("facile","moyen","difficile") NOT NULL DEFAULT 'facile',
  RCT_COUT ENUM("faible","moyen","eleve") NOT NULL DEFAULT 'faible',
  RCT_STATUT ENUM("brouillon","soumise","finale") NOT NULL DEFAULT 'brouillon',
  RCT_ILLUSTRATION varchar(80) NOT NULL,    
  UTI_ID bigint(20) unsigned NOT NULL,
  RCT_NBPERSONNE int NOT NULL,
  PRIMARY KEY (RCT_ID),
  KEY (UTI_ID) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


 
-- Table des catégories
-- DROP TABLE IF EXISTS T_CATEGORIE_CAT;
CREATE TABLE IF NOT EXISTS `T_CATEGORIE_CAT` (
  CAT_ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  CAT_LABEL varchar(255) NOT NULL,
  CAT_DESCRIPTION mediumtext NOT NULL,
  CAT_ILLUSTRATION varchar(80) NOT NULL,  
  PRIMARY KEY (CAT_ID)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


-- Table d'association entre recettes et  catégories
-- DROP TABLE IF EXISTS TJ_CAT_RCT;
CREATE TABLE IF NOT EXISTS `TJ_CAT_RCT` (
  CAT_ID bigint(20) unsigned NOT NULL,
  RCT_ID bigint(20) unsigned NOT NULL,  
  PRIMARY KEY (CAT_ID, RCT_ID),
  KEY (CAT_ID),
  KEY (RCT_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- Table des ingrédients
-- DROP TABLE IF EXISTS T_INGREDIENT_IGD;
CREATE TABLE IF NOT EXISTS `T_INGREDIENT_IGD` (
  IGD_ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  IGD_LABEL varchar(255) NOT NULL,
  IGD_DESCRIPTION mediumtext,
  IGD_ILLUSTRATION varchar(80) NULL DEFAULT NULL,
  IGD_VALIDE bool NOT NULL DEFAULT 0,
  UTI_ID bigint(20) unsigned NULL DEFAULT NULL,
  PRIMARY KEY (IGD_ID),
  KEY (IGD_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;



-- Table d'association (composer)des recettes, ingédients et unités
-- DROP TABLE IF EXISTS TJ_IGD_RCT_UNI;
CREATE TABLE IF NOT EXISTS `TJ_IGD_RCT_UNI` (
  RCT_ID bigint(20) unsigned NOT NULL,
  IGD_ID bigint(20) unsigned NOT NULL,
  UNI_ID varchar(30) NOT NULL,
  IGD_RCT_UNI_QUANTITE int(11) NOT NULL,      
  PRIMARY KEY (RCT_ID, IGD_ID, UNI_ID),
  KEY (RCT_ID),
  KEY (IGD_ID),
  KEY (UNI_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


 
-- Table de commentaires
-- DROP TABLE IF EXISTS T_COMMENTAIRE_COM;
CREATE TABLE IF NOT EXISTS `T_COMMENTAIRE_COM` (
  COM_ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  COM_TEXTE mediumtext NOT NULL,
  COM_DATE timestamp NOT NULL DEFAULT NOW(), 
  UTI_ID bigint(20) unsigned NULL,
  RCT_ID bigint(20) unsigned NOT NULL,
  PRIMARY KEY (COM_ID),
  KEY (RCT_ID),
  KEY (UTI_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

    
-- création des clés étrangéres
                                
ALTER TABLE TJ_CAT_RCT
 ADD CONSTRAINT C_FK_CAT_CAT_RCT FOREIGN KEY (CAT_ID) REFERENCES T_CATEGORIE_CAT (CAT_ID) ,
 ADD CONSTRAINT C_FK_RCT_CAT_RCT FOREIGN KEY (RCT_ID) REFERENCES T_RECETTE_RCT (RCT_ID) ;
 
ALTER TABLE  T_UNITE_UNI        
     ADD CONSTRAINT C_FK_UNI_UTI FOREIGN KEY (UTI_ID) REFERENCES T_UTILISATEUR_UTI (UTI_ID) ;
    
ALTER TABLE T_COMMENTAIRE_COM
 ADD CONSTRAINT C_FK_UTI_COM FOREIGN KEY (UTI_ID) REFERENCES T_UTILISATEUR_UTI (UTI_ID) ,
 ADD CONSTRAINT C_FK_RCT_COM FOREIGN KEY (RCT_ID) REFERENCES T_RECETTE_RCT (RCT_ID) ;

ALTER TABLE TJ_IGD_RCT_UNI
 ADD CONSTRAINT C_FK_RCT_IGD_RCT_UNI FOREIGN KEY (RCT_ID) REFERENCES T_RECETTE_RCT (RCT_ID) ,
 ADD CONSTRAINT C_FK_IGD_IGD_RCT_UNI FOREIGN KEY (IGD_ID) REFERENCES T_INGREDIENT_IGD(IGD_ID), 
 ADD CONSTRAINT C_FK_UNI_IGD_RCT_UNI FOREIGN KEY (UNI_ID) REFERENCES T_UNITE_UNI (UNI_ID) ;

ALTER TABLE T_INGREDIENT_IGD
 ADD CONSTRAINT C_FK_UTI_IGD FOREIGN KEY (UTI_ID) REFERENCES T_UTILISATEUR_UTI (UTI_ID) ;

ALTER TABLE T_RECETTE_RCT
 ADD CONSTRAINT C_FK_UTI_RCT FOREIGN KEY (UTI_ID) REFERENCES T_UTILISATEUR_UTI (UTI_ID) ;


-- données de la table t_utilisateur_uti
INSERT INTO t_utilisateur_uti (UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR) VALUEs
('julienB', 'julien.bringard@outlook.fr', 'Bringard', 'Julien', SHA1('clownier13'), 1, NULL),
('alexisD', 'alexis.ducreux@outlook.fr', 'Ducreux', 'Alexis', SHA1('ducreux13310'), 1, NULL),
('compteTest', 'compte.test@outlook.fr', 'Test', 'Compte', SHA1('testCompte'), 0, NULL)

-- données de la table t_unite_uni
INSERT INTO t_unite_uni (UNI_ID, UNI_LABEL, UNI_SHORT_LABEL, UNI_DESCRIPTION, UNI_VALIDE, UTI_ID) VALUES
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
(11, 'Cuillère à soupe', 'cas', NULL, 1, 3)

-- données de la table t_recette_rct
INSERT INTO t_recette_rct (RCT_ID, RCT_DATE, RCT_TITRE, RCT_DESCRIPTION, RCT_PREPARATION, RCT_TEMPS_PREPARATION, RCT_TEMPS_CUISSON, RCT_TEMPS_REPOS, RCT_DIFFICULTE, RCT_COUT, RCT_STATUT, RCT_ILLUSTRATION, UTI_ID, RCT_NBPERSONNE) VALUES
(3, '2017-10-06', 'Soupe de melon glacée à la coriandre, topping galettes au tofu à l’indienne', 'Voici une jolie recette qui nous permet de nous régaler avec les derniers melons de la saison.', '1. Coupez les melons en deux, prélevez la chair puis mixez-la avec le jus de citron ainsi qu’une pincée de sel et de poivre. Vous pouvez rajouter un peu d’eau dans le blender pour rectifier la consistance. Pensez à conserver les écorces pour le dressage.
2. Une fois la consistance onctueuse et homogène obtenue, ajoutez la coriandre puis mixez à nouveau.
3. Réfrigérez pour deux heures au minimum. Dressez ensuite la soupe glacée dans des bols ou dans les écorces de melon. Emiettez les galettes de tofu, puis faites-les dorer dans une poêle huilée quelques minutes. Parsemez cette préparation sur les soupes de melon. Dégustez aussitôt.', '00:20:00', NULL, '02:00:00', 'facile', 'faible', 'finale', 'soupeMelon.png', 1, 6),
(4, '2017-10-06', 'Filet mignon de porc rôti au Bresse Bleu, façon Orloff', 'La recette traditionnelle du rôti orloff est un rôti de veau garni de tranches de bacon et de gruyère. Les cuisiniers de Bresse bleu revisite cette recette en insérant des tranches de fromage bleu de Bresse avec la duxelles de champignons. Absolument gourmand !', '1. Dans une sauteuse, faites colorer le filet mignon avec 20 g de beurre, sel et poivre. Faites cuire 10 min en retournant régulièrement, puis laissez refroidir.
2. Emincez la moitié des champignons en lamelles, réservez. Hachez l’autre moitié au couteau, faites de même avec les échalotes.
3. Faites suer les échalotes 3 min dans une casserole avec 50 g de beurre sur feu moyen, ajoutez ensuite les champignons hachés, sel et poivre. Laissez cuire encore 15 minutes en remuant régulièrement, vous obtiendrez une préparation presque sèche, une duxelles.
4. Hors du feu ajoutez le persil et la moitié du Bresse Bleu en dés. Mélangez bien et laissez refroidir.
5. Dans une poêle faites sauter les lamelles de champignons avec 30 g de beurre jusqu’à ce quelles soient dorées.
6. Placez-les au fond d’un petit plat à four.
7. Coupez le restant de Bresse Bleu en lamelles, environ 10.
8. Préchauffez le four à 150°C (th.5).
9. Découpez le filet mignon en 8 tranches. Entre chaque tranche mettez une lamelle de Bresse Bleu et une portion de duxelles puis reformez le filet mignon. Déposez dans le plat à four, nappez de crème fraiche puis mettez le reste de tranches de Bresse Bleu.
10. Mettez au four pour 5 à 10 minutes le rôti doit être doré.', '00:25:00', '00:30:00', NULL, 'facile', 'faible', 'brouillon', 'filetMignon.png', 1, 6),
(5, '2017-10-06', 'Salade de pêches à la fleur d’oranger', 'C’est parfois simple de se régaler : cette salade de fruits très facile à faire sera délicieuse grâce à l’ajout d’eau de fleur d’oranger. Elle va à merveille avec le goût des pêches et apporte le petit plus de la recette. En plus, manger des fruits crus est très bon pour le corps car ils sont riches en vitamines, anti-oxydants et minéraux. Pour une version vegan, remplacez le miel par du sirop d’agave.', '1. Coupez les pêches en fines tranches.
2. Dans une poêle, faites chauffer le miel et l’eau de fleur d’oranger avec 2 cuillères à soupe d’eau.
3. Ajoutez les pêches et laissez-les cuire 3 min pour qu’elles deviennent fondantes.
4. Réservez 30 min au frais avant de servir.

Mon conseil : ajoutez des lamelles d’abricots et saupoudrez de pistaches finement mixées.', '00:10:00', '00:05:00', '00:30:00', 'facile', 'faible', 'brouillon', 'saladePeche.png', 1, 4),
(6, '2017-10-06', 'Mousse de betterave aux noisettes', 'Voici de quoi bluffer vos invités, avec cette recette de mousse salée au bon goût de betterave, idéale pour l’apéritif.', '1. A l’aide d’un blender, mixez l’ensemble des ingrédients excepté les noisettes.
2. Versez cette préparation dans des verrines.
3. Concassez les noisettes, puis saupoudrez de noisettes concassées chaque verrine. Réservez au frais jusqu’au moment de servir.', '00:10:00', NULL, NULL, 'facile', 'faible', 'brouillon', 'mousseBetterave.png', 2, 2),
(7, '2017-10-06', 'Cocotte d’agneau à la bière brune et aux spéculoos', 'Avec l’arrivée du printemps, vous allez bientôt pouvoir cuisiner de l’agneau. Voici une recette aux saveurs du Nord avec de la bière et des speculoos, façon carbonade flamande.', '1. Coupez l’agneau en cubes, puis faites chauffer dans une poêle le reste de beurre et faites-y colorer rapidement les morceau d’agneau sur feu vif, salez et poivrez puis sortez les morceaux d’agneau.
2. Versez une peu de bière dans la poêle et grattez les sucs de cuisson de la viande.
3. Faites chauffer une cocotte avec la moitié du beurre, hachez les oignons et faites les blondir sur feu doux à couvert quelques minutes.
4. Saupoudrez les oignons avec la farine mélangez bien et versez 20 cl d’eau, mélangez puis ajoutez l’agneau, les sucs de cuisson, le reste de bière, la moutarde, le bouquet garni et le cube de bouillon émietté, couvrez et laissez mijoter 1 heure sur feu très doux.
5. Coupez les carottes en grosses rondelles puis ajoutez les ainsi que les speculoos concassés, mélangez et prolongez la cuisson de 30 minutes.
6. La viande doit pouvoir se couper à la fourchette, si besoin poursuivez la cuisson, ajustez l’assaisonnement et servez parsemé de persil haché et accompagné d’une purée de pomme de terre ou de frites.',	'00:25:00', '01:30:00', NULL, 'facile', 'faible', 'brouillon', 'cocotteAgneau.png', 2, 4),
(8, '2017-10-06', 'Tiramisu pistaches cerises', 'La pâte de pistache est très parfumée et odorante. Elle permet de donner une douce saveur de pistaches à vos desserts comme dans ce tiramisu.', '1. Séparez les blancs des jaunes d’œufs.
2. Dans un saladier, mélangez les jaunes d’œufs avec le sucre jusqu’à ce qu’ils blanchissent. Ajoutez la purée de pistache puis le mascarpone.
3. Battez les blancs en neige ferme. Incorporez-les au mélange précédent.
4. Versez le sirop et l’eau dans un bol. Trempez-y rapidement les biscuits à la cuillère un par un. Tapissez le fond des verrines avec les biscuits.
5. Répartissez les cerises sur les biscuits.
6. Répartissez la crème au mascarpone dans les verrines puis saupoudrez de pistaches concassées.
7. Réservez au frais 2 h avant de servir.', '00:20:00', NULL, '02:00:00', 'facile', 'faible', 'brouillon', 'tiramisuPistachesCerises.png', 2, 6),
(9, '2017-10-06', 'Fonds d’artichauts garnis aux crevettes et fromage frais', 'Une entrée fraîche et originale parfaite quand on ne veux allumer le four !', '1. Réservez 6 crevettes et coupez le reste en rondelles.
2. Dans un bol, mélangez la ricotta, avec de la ciboulette ciselée, du sel et du poivre. A l’aide d’une fourchette ajoutez les crevettes et mélangez.
3. Egouttez les fonds d’artichaut et remplissez-les avec la ricotta aux crevettes.
4. Décorez avec les crevettes restantes, de la ciboulette et servez.', '00:15:00', NULL, NULL, 'facile', 'faible', 'brouillon', 'fondsArtichauts.png', 3, 6),
(10, '2017-10-06', 'Ballotins de volaille, duxelles de champignons', 'Si vous cherchez une recette pas chère pour le repas de Noël, celle-ci sera parfaite ! Un filet de dinde, des champignons et une pointe de vin blanc suffisent à faire un plat festif et délicieux. Vous pouvez aussi le faire avec des escalopes de veau et des cèpes pour un plat encore plus festif.', '1. Coupez les oignons et les champignons en petits dés.
2. Faites rissoler les oignons dans une poêle avec un filet d’huile d’olive, lorsqu’ils sont dorés ajoutez les champignons faites revenir puis couvrez et laissez cuire 5 minutes.
3. Sur une planche à découper étalez les filets de dinde à l’aide d’un rouleau à pâtisserie, pour cela vous pouvez recouvrir le filet de dinde d’une feuille de film alimentaire.
4. Etalez la duxelles sur les filets de dinde et roulez-les, entourez d’une ficelle de cuisine.
5. Faites cuire les roulés de dinde dans une sauteuse avec un filet d’huile d’olive laissez cuire quelques minutes, puis retournez les roulés ajoutez le vin et l’eau, couvrez faites cuire 5 à 10 minutes à couvert à petit feu.
6. Servez avec des pommes dauphines.', '00:30:00', '00:20:00', NULL, 'facile', 'faible', 'brouillon', 'ballotinVolaille.png', 3, 4),
(11, '2017-10-06', 'Perles du Japon au lait de coco et framboises', 'A la différence du miel, le sirop d’Agave s’adapte parfaitement à une alimentation vegan. Il possède un pouvoir sucrant très élevé, ce qui permet d’en limiter sa quantité. On l’utilise de plus en plus en pâtisserie, comme dans cette recette par exemple.', '1. Portez à légère ébullition le lait et le lait de coco avec le Sirop d’Agave BIO Pure Via.
2. Une fois chaud, versez les perles du Japon dans la casserole et faites cuire à feu doux pendant 20 minutes environ, jusqu’à épaississement du mélange. Les perles deviennent translucides lorsqu’elles sont cuites.
3. Hors du feu, ajoutez les framboises. Garnissez de jolis bols ou verrines de cette préparation et réfrigérez pour 3 heures. Dégustez bien frais.', '00:15:00', NULL, NULL, 'facile', 'faible', 'brouillon', 'perlesJapon.png', 3, 2)

-- données de la table t_categorie_cat
INSERT INTO t_categorie_cat (CAT_ID, CAT_LABEL, CAT_DESCRIPTION, CAT_ILLUSTRATION) VALUES
(1, 'Entrées', 'Toutes nos entrées', 'entree.png'),
(2, 'Plats', 'Tous nos plats chauds', 'plat.png'),
(3, 'Desserts', 'Tous nos desserts', 'dessert.png')

-- données de la table tj_cat_rct
INSERT INTO tj_cat_rct (CAT_ID, RCT_ID) VALUES
(1, 3),
(1, 6),
(1, 9),
(2, 4),
(2, 7),
(2, 10),
(3, 5),
(3, 8),
(3, 11)

-- données de la table t_ingredient_igd
INSERT INTO t_ingredient_igd (IGD_LABEL, IGD_DESCRIPTION, IGD_ILLUSTRATION, IGD_VALIDE, UTI_ID) VALUES
('galettes de tofu à l’indienne Tossolia', NULL, NULL, 1, 1),
('melons à point', NULL, NULL, 1, 1),
('soupe de coriandre ciselée', NULL, NULL, 1, 1),
('citron vert', NULL, NULL, 1, 1),
('huile d’olive', NULL, NULL, 1, 1),
('fromage Bresse Bleu', NULL, NULL, 1, 1),
('filet mignon de porc', NULL, NULL, 1, 1),
('champignons de Paris', NULL, NULL, 1, 1),
('persil plat ciselé', NULL, NULL, 1, 1),
('Beurre', NULL, NULL, 1, 1),
('Crème fraîche', NULL, NULL, 1, 1),
('Sel', NULL, NULL, 1, 1),
('Poivre', NULL, NULL, 1, 1),
('pêches', NULL, NULL, 1, 1),
('Miel', NULL, NULL, 1, 1),
('Fleur d’oranger', NULL, NULL, 1, 1),
('Betterave cuite', NULL, NULL, 1, 2),
('Noisettes', NULL, NULL, 1, 2),
('Huile d’olive à la truffe', NULL, NULL, 1, 2),
('Vinaigre balsamique', NULL, NULL, 1, 2),
('Moutarde', NULL, NULL, 1, 2),
('Gousse d’ail', NULL, NULL, 1, 2),
('Ciboulette', NULL, NULL, 1, 2),
('Sel', NULL, NULL, 1, 2),
('Poivre', NULL, NULL, 1, 2),
('Gigot d’agneau', NULL, NULL, 1, 2),
('Bière brune', NULL, NULL, 1, 2),
('Oignons', NULL, NULL, 1, 2),
('Beurre', NULL, NULL, 1, 2),
('Farine', NULL, NULL, 1, 2),
('Carottes', NULL, NULL, 1, 2),
('Persil', NULL, NULL, 1, 2),
('Bouquet garni', NULL, NULL, 1, 2),
('Spéculoos', NULL, NULL, 1, 2),
('Bouillon cube de viande', NULL, NULL, 1, 2),
('Mascarpone', NULL, NULL, 1, 2),
('Œufs', NULL, NULL, 1, 2),
('Sucre', NULL, NULL, 1, 2),
('Purée de pistache', NULL, NULL, 1, 2),
('Sirop de grenadine', NULL, NULL, 1, 2),
('Eau', NULL, NULL, 1, 2),
('Biscuits à la cuillère', NULL, NULL, 1, 2),
('Cerises dénoyautées', NULL, NULL, 1, 2),
('Pistaches concassées', NULL, NULL, 1, 2),
('crevettes', NULL, NULL, 1, 3),
('Ricotta', NULL, NULL, 1, 3),
('Cœurs d’artichaut', NULL, NULL, 1, 3),
('Bouquet de ciboulette', NULL, NULL, 1, 3),
('Sel', NULL, NULL, 1, 3),
('Poivre', NULL, NULL, 1, 3),
('champignons', NULL, NULL, 1, 3),
('Oignons', NULL, NULL, 1, 3),
('Escalopes de dindes', NULL, NULL, 1, 3),
('Vin blanc', NULL, NULL, 1, 3),
('Eau', NULL, NULL, 1, 3),
('Huile d’olive', NULL, NULL, 1, 3),
('perles du japon', NULL, NULL, 1, 3),
('Lait écrémé', NULL, NULL, 1, 3),
('Lait de coco', NULL, NULL, 1, 3),
('Sirop d’agave', NULL, NULL, 1, 3),
('Framboises fraîches', NULL, NULL, 1, 3)

-- données de la table tj_igd_rct_uni
INSERT INTO tj_igd_rct_uni (RCT_ID, IGD_ID, UNI_ID, IGD_RCT_UNI_QUANTITE) VALUES
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),
(),