-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 oct. 2018 à 17:35
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `generator`
--

-- --------------------------------------------------------

--
-- Structure de la table `libelle`
--

DROP TABLE IF EXISTS `libelle`;
CREATE TABLE IF NOT EXISTS `libelle` (
  `id_libelle` int(11) NOT NULL AUTO_INCREMENT,
  `id_picture` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_libelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `meme`
--

DROP TABLE IF EXISTS `meme`;
CREATE TABLE IF NOT EXISTS `meme` (
  `id_meme` int(11) NOT NULL AUTO_INCREMENT,
  `titre_meme` varchar(255) NOT NULL,
  `image_meme` varchar(255) NOT NULL,
  `new_meme` varchar(255) NOT NULL,
  `id_picture` int(11) NOT NULL,
  PRIMARY KEY (`id_meme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id_picture` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `id_libelle` int(11) NOT NULL,
  PRIMARY KEY (`id_picture`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id_picture`, `photo`, `id_libelle`) VALUES
(1, 'https://i.imgflip.com/2/4bh6h.jpg', 2),
(62, 'https://i.postimg.cc/Gpg3Xp5r/ALI.jpg', 3),
(63, 'https://i.postimg.cc/1Xw9Rr55/BA.jpg', 4),
(64, 'https://i.postimg.cc/SsXS3pB9/BO.jpg', 5),
(65, 'https://i.postimg.cc/7ZxxD7vw/FAB.jpg', 6),
(66, 'https://i.postimg.cc/DZbh5PGd/IMG-1903.jpg', 7),
(67, 'https://i.postimg.cc/66v6htLJ/FAY.jpg', 8),
(68, 'https://i.postimg.cc/WbNK174W/IMG-2056.jpg', 9),
(69, 'https://i.postimg.cc/rp07LFpq/IMG-2085.jpg', 10),
(70, 'https://i.postimg.cc/sg2twJdQ/IMG-2077.jpg', 11),
(71, 'https://i.postimg.cc/vHCWNQCr/IMG-2199.jpg', 12),
(72, 'https://i.postimg.cc/Jn7JktBL/IMG-2321.jpg', 13),
(73, 'https://i.postimg.cc/wxf5D5Vb/IMG-2183.jpg', 14),
(74, 'https://i.postimg.cc/2jKv1kks/OU.jpg', 15),
(75, 'https://i.postimg.cc/wjKmkwsF/MO.jpg', 16),
(76, 'https://i.postimg.cc/26XqLGDQ/RO.jpg', 17),
(77, 'https://i.postimg.cc/DZ3pkrDc/IMG-2110.jpg', 32),
(78, 'https://i.postimg.cc/1zGcFLCp/IMG-2138.jpg', 18),
(79, 'https://i.postimg.cc/fTSdXGkJ/IMG-2331.jpg', 19),
(80, 'https://i.postimg.cc/t4Ph0KHL/IMG-2278.jpg', 20),
(81, 'https://i.postimg.cc/cCmbcvFB/IMG-2107.jpg', 21),
(82, 'https://i.postimg.cc/Xq3PFfkv/IMG-2095.jpg', 22),
(83, 'https://i.postimg.cc/8c5hqs1H/IMG-2146.jpg', 23),
(84, 'https://i.postimg.cc/J7NVnn5n/IMG-2053.jpg', 24),
(85, 'https://i.postimg.cc/rmqGNQ37/IMG-2196.jpg', 25),
(86, 'https://i.postimg.cc/D0HbHgpv/IMG-2328.jpg', 26),
(87, 'https://i.postimg.cc/KYDBjtjf/IMG-2319.jpg', 27),
(88, 'https://i.postimg.cc/m2mnzFzb/IMG-2082.jpg', 28),
(89, 'https://i.postimg.cc/prYg1GL8/IMG-2005.jpg', 29),
(90, 'https://i.postimg.cc/qvMdWTn7/IMG-1932.jpg', 30),
(91, 'https://i.postimg.cc/yd9q0YqL/IMG-2002.jpg', 31);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`) VALUES
(3, 'arta@gmail.com', 'arta', 'aidara'),
(7, 'omar.m@codeur.cs', 'adja', 'cherif'),
(9, 'oo2sow@gmail.com', 'asq', 'asc'),
(13, 'adji.d@codeur.online', 'dieye', 'azerty');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
