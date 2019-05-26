-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 25 mai 2019 à 14:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `code_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` date NOT NULL,
  `urlImgArticle` varchar(255) DEFAULT NULL,
  `code_categorie` int(11) NOT NULL,
  PRIMARY KEY (`code_article`),
  KEY `Article_Categorie_FK` (`code_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`code_article`, `titre`, `contenu`, `date`, `urlImgArticle`, `code_categorie`) VALUES
(1, 'Homer SImpson', '«Mon pote Michael Jackson» («Stark Raving Dad», en version originale), premier épisode de la troisième saison, raconte comment Homer est envoyé dans un asile de fous où il rencontre un patient appelé Leon Kompowsky, qui prétend être Michael Jackson. Homer, qui ne sait pas qui est Michael Jackson, le croit, et une foule de cocasseries en découlent. Tout tourne autour du fait que c’est le vrai Michael Jackson qui prête sa voix à Leon, farce prolongée jusqu’au recours à un pseudo au générique.', '2019-05-03', '\"img/homer2.jpg\"', 1),
(2, 'Faut-il changer la voix d\'Apu dans les Simpson?', '«La chose la plus importante à faire c\'est d\'écouter ce que les Indiens ont à dire à ce sujet. J\'ai envie de voir des acteurs indiens ou sud-asiatiques dans la salle d\'écriture pour voir vers quelle direction il faut orienter le personnage d\'Apu. Je suis prêt à céder ma place, je pense que c\'est la meilleure chose à faire», explique-t-il.\r\n\r\n<p>Lucien Hughes, étudiant en physique à Nottingham, est celui qui a véritablement lancé le sous-genre. Le jeune homme de 19 ans a produit une dizaine de vidéos empreintes de psychédélisme mixant hits de la vaporwave et images des Simpson:</p>\r\n\r\n<p>«J’ai vu des vidéos similaires et décidé d’en faire moi-même avec ma connaissance rudimentaire d’Adobe Premiere et After Effects, explique à Pitchfork Lucien Hughes, qui a commencé ses montages en février 2016. C’était une plaisanterie au départ mais les vidéos ont commencé à gagner du terrain sur Facebook donc j’ai fini par y consacrer plus de temps.»</p>\r\n\r\n<p>Pour lui, le sens donné à ce genre musical collait parfaitement à la maisonnée de Springfield. «Les Simpson sont assez uniques car presque toutes les personnes nées entre les années 1980 et le début des années 2000 ont grandi en les regardant. La vaporwave s’articule sur la création d’une atmosphère de nostalgie, alors je pense que les Simpson intègrent parfaitement l’ensemble esthétique», estime-t-il. Il ne sait pas combien de temps la simpsonwave perdurera mais, avec des centaines de milliers de vues sur ses vidéos, Homer et sa famille semblent affirmer leur relation fructueuse avec la vaporwave, au point d’en devenir le symbole le plus pertinent.</p>', '2019-05-04', '\"img/apu.jpg\"', 1),
(3, 'Toutes les fois où Marge aurait dû quitter Homer', 'La relation entre Marge et Homer Simpson est l\'une des plus adorables de la télévision. Enfin presque. Dans un article publié sur le site New Statesman (partagé notamment par l\'un des scénaristes de la série), Anna Leszkiewicz a remonté la totalité de l\'histoire de la série pour identifier les épisodes problématiques pour le couple, les détailler, et déterminer quand Marge aurait dû quitter son mari.', '2019-05-03', '\"img/allsimpson.jpg\"', 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `code_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`code_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`code_categorie`, `nom`) VALUES
(1, 'Jeux'),
(2, 'Series'),
(3, 'Films'),
(4, 'Nature'),
(5, 'Tutos');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `Article_Categorie_FK` FOREIGN KEY (`code_categorie`) REFERENCES `categorie` (`code_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
