
CREATE DATABASE IF NOT EXISTS `recette` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use `recette`;

CREATE USER 'u_recette'@'localhost' IDENTIFIED BY 'SJzEeqLb2HHeNYVV';
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

CREATE TABLE IF NOT EXISTS `t_utilisateur_uti` (
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
CREATE TABLE  T_UNITE_UNI (
  UNI_LABEL varchar(30) NOT NULL,
  UNI_SHORT_LABEL varchar(15) NOT NULL,
  UNI_DESCRIPTION mediumtext NOT NULL,
  UNI_VALIDE bool NOT NULL DEFAULT 0,
  UTI_ID  bigint(20) unsigned NOT NULL,
  KEY (UTI_ID),
  PRIMARY KEY (UNI_LABEL)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- Table des recettes
-- DROP TABLE IF EXISTS T_RECETTE_RCT;
CREATE TABLE   T_RECETTE_RCT (
  RCT_ID  bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  RCT_DATE timestamp NOT NULL DEFAULT NOW(), 
  RCT_TITRE varchar(80) NOT NULL,
  RCT_DESCRIPTION longtext NOT NULL,
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
CREATE TABLE  T_CATEGORIE_CAT (
  CAT_ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  CAT_LABEL varchar(255) NOT NULL,
  CAT_DESCRIPTION mediumtext NOT NULL,
  CAT_ILLUSTRATION varchar(80) NOT NULL,  
  PRIMARY KEY (CAT_ID)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


-- Table d'association entre recettes et  catégories
-- DROP TABLE IF EXISTS TJ_CAT_RCT;
CREATE TABLE  TJ_CAT_RCT (
  CAT_ID bigint(20) unsigned NOT NULL,
  RCT_ID bigint(20) unsigned NOT NULL,  
  PRIMARY KEY (CAT_ID, RCT_ID),
  KEY (CAT_ID),
  KEY (RCT_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- Table des ingrédients
-- DROP TABLE IF EXISTS T_INGREDIENT_IGD;
CREATE TABLE  T_INGREDIENT_IGD (
  IGD_ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  IGD_LABEL varchar(255) NOT NULL,
  IGD_DESCRIPTION mediumtext NOT NULL,
  IGD_ILLUSTRATION varchar(80) NULL DEFAULT NULL,
  IGD_VALIDE bool NOT NULL DEFAULT 0,
  UTI_ID bigint(20) unsigned NULL DEFAULT NULL,
  PRIMARY KEY (IGD_ID),
  KEY (IGD_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;



-- Table d'association (composer)des recettes, ingédients et unités
-- DROP TABLE IF EXISTS TJ_IGD_RCT_UNI;
CREATE TABLE  TJ_IGD_RCT_UNI (
  RCT_ID bigint(20) unsigned NOT NULL,
  IGD_ID bigint(20) unsigned NOT NULL,
  UNI_LABEL varchar(30) NOT NULL,
  IGD_RCT_UNI_QUANTITE int(11) NOT NULL,      
  PRIMARY KEY (RCT_ID, IGD_ID, UNI_LABEL)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


 
-- Table de commentaires
-- DROP TABLE IF EXISTS T_COMMENTAIRE_COM;
CREATE TABLE  T_COMMENTAIRE_COM (
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
 ADD CONSTRAINT C_FK_IGD_IGD_RCT_UNI FOREIGN KEY (IGD_ID) REFERENCES T_INGREDIENT_IGD(IGD_IG), 
 ADD CONSTRAINT C_FK_UNI_IGD_RCT_UNI FOREIGN KEY (UNI_LABEL) REFERENCES T_UNITE_UNI (UNI_LABEL) ;

ALTER TABLE T_INGREDIENT_IGD
 ADD CONSTRAINT C_FK_UTI_IGD FOREIGN KEY (UTI_ID) REFERENCES T_UTILISATEUR_UTI (UTI_ID) ;

ALTER TABLE T_RECETTE_RCT
 ADD CONSTRAINT C_FK_UTI_RCT FOREIGN KEY (UTI_ID) REFERENCES T_UTILISATEUR_UTI (UTI_ID) ;


-- données de la table t_utilisateur_uti
INSERT INTO t_utilisateur_uti (UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR) VALUEs
('julienB', 'julien.bringard@outlook.fr', 'Bringard', 'Julien', SHA1('clownier13'), 1, NULL),
('alexisD', 'alexis.ducreux@outlook.fr', 'Ducreux', 'Alexis', SHA1('ducreux13310'), 1, NULL),
('compteTest', 'compte.test@outlook.fr', 'Test', 'Compte', SHA1('be9f885cd90fb66095a23e329113af8493c80666'), 0, NULL)

-- données de la table t_unite_uni
INSERT INTO t_unite_uni () VALUEs
('Cuillère à soupe', 'cas', NULL, 1, 1),
('Cuillère à café', 'cac', NULL, 1, 1),
('Gramme', 'g', NULL, 1, 1),
('Kilogramme', 'Kg', NULL, 1, 2),
('Gramme', 'g', NULL, 1, 2),
('Cuillère à soupe', 'cas', NULL, 1, 2),
('Cuillère à café', 'cac', NULL, 1, 2),
('Centilitre', 'cl', NULL, 1, 2),
(Gramme  g NULL  1 3),
(Centilitre  cl  NULL  1 3),
(Cuillère à soupe  cas NULL  1 3)

-- données de la table t_recette_rct

-- données de la table t_categorie_cat

-- données de la table tj_cat_rct

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