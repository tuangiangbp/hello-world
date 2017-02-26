-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Client: DuyDoanh
-- Généré le: Lun 05 Septembre 2016 à 03:21
-- Version du serveur: 5.5.50
-- Version de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `botlike`
--

-- --------------------------------------------------------

--
-- Structure de la table `BLOCK`
--

CREATE TABLE IF NOT EXISTS `BLOCK` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `thoigian` varchar(52) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;
--
-- Structure de la table `BotCmt`
--

CREATE TABLE IF NOT EXISTS `BotCmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `token` varchar(255) NOT NULL,
  `bieutuong` varchar(32) NOT NULL,
  `quangcao` varchar(32) NOT NULL,
  `ten` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Structure de la table `BotCmtRd`
--

CREATE TABLE IF NOT EXISTS `BotCmtRd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `token` varchar(255) NOT NULL,
  `noidung` varchar(1024) NOT NULL,
  `ten` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Structure de la table `BotCx`
--

CREATE TABLE IF NOT EXISTS `BotCx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ten` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Structure de la table `BotEx`
--

CREATE TABLE IF NOT EXISTS `BotEx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ten` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Structure de la table `BotExCx`
--

CREATE TABLE IF NOT EXISTS `BotExCx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ten` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Structure de la table `BotLike`
--

CREATE TABLE IF NOT EXISTS `BotLike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `token` varchar(255) NOT NULL,
  `likecmt` varchar(32) NOT NULL,
  `ten` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
----------------------------------------------------


--
-- Structure de la table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `token1` varchar(255) NOT NULL,
  `token2` varchar(255) NOT NULL,
  `taikhoan` varchar(32) NOT NULL,
  `luotauto` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
