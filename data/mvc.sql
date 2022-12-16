-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 déc. 2022 à 13:12
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `realisateur` varchar(70) NOT NULL,
  `annee` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `pitch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `image`, `trailer`, `titre`, `realisateur`, `annee`, `genre`, `pitch`) VALUES
(6, '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/oyoew4T74_w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Straight Outta Compton', 'Felix Gary Gray', 2015, 'Musique', 'Au milieu des années 1980, l\'authenticité brute et provocante du groupe de rap N.W.A. émerge des rues malfamées de Compton pour révolutionner la culture hip-hop.'),
(7, '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/afDNAILz6Tw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Wakanda Forever', 'Ryan Coogler', 2022, 'Action', '');

-- --------------------------------------------------------

--
-- Structure de la table `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `annee` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `pitch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `series`
--

INSERT INTO `series` (`id`, `image`, `trailer`, `titre`, `annee`, `genre`, `pitch`) VALUES
(6, 'images/attaque_des_titans.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_EijhJqazsI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>       ', 'l\'attaque des titans', 2019, 'Anime', 'Témoin du massacre de sa ville natale, le jeune Eren Yeager décide de prendre sa revanche et de tuer les géants qui menacent d\'exterminer l\'humanité.'),
(7, 'images/tokyo_ghoul.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vGuQeQsoRgU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Tokyo ghoul', 2018, 'Anime', 'Alors que Tokyo est envahie par des créatures amatrices de chair fraîche à l\'apparence humaine, Ken, mi-homme mi-goule se retrouve coincé entre deux mondes.'),
(8, 'images/baki.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xniBk7zAKMY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Baki', 2020, 'Anime', 'Alors que le champion d\'arts martiaux Baki Hanma s\'entraîne pour surpasser son père, un combattant légendaire, cinq féroces condamnés à mort viennent l\'affronter à Tokyo.'),
(9, 'images/kengan.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kXoxe1wW-aI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Kengan Ashura', 2019, 'Anime', 'Ohma Tokita pénètre dans un univers secret où les litiges se règlent à coup de violents combats de gladiateurs. Oubliez l\'argent, l\'objectif est de se battre pour gagner.'),
(10, 'images/demon_slayer.jpg', '', 'Demon Slayer', 2019, 'Anime', 'Tanjiro se lance dans un périlleux voyage pour venger sa famille massacrée par un démon et délivrer sa sœur d\'un mauvais sort.'),
(11, 'images/fairy_tail.jpg', '', 'Fairy Tail', 2018, 'Anime', 'Pour sa première mission, Lucy doit gravir le mont Hakobe à la recherche d\'un mage disparu, en compagnie de ses amis Natsu et Happy.'),
(12, 'images/hunterXhunter.jpg', '', 'hunter X hunter', 2014, 'Anime', 'Pour réaliser son rêve et devenir un Hunter de légende comme son père, un jeune garçon décide de passer un examen très difficile et de partir à sa recherche.'),
(13, 'images/my_hero_academia.jpg', '', 'My Hero Academia', 2017, 'Anime', 'Après avoir sauvé une brute des mains d\'un méchant, un adolescent normal commence à suivre des cours pour super-héros dans un prestigieux lycée.'),
(14, 'images/naruto.jpg', '', 'Naruto Shippuden', 2017, 'Anime', 'Naruto Uzumaki rentre chez lui après deux ans d\'entraînement intensif et s\'associe à Sakura Haruno pour combattre une organisation malfaisante.'),
(17, 'images/spriggan.jpg', '', 'Spriggan', 2020, 'Annime', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
