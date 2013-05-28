-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 28 Mai 2013 à 20:43
-- Version du serveur: 5.1.53-community-log
-- Version de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `socialclub`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL,
  `posts_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`posts_id`,`users_id`),
  KEY `fk_comments_posts1_idx` (`posts_id`),
  KEY `fk_comments_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `users_from_id` int(11) NOT NULL,
  `users_to_id` int(11) NOT NULL,
  `accept_invit` binary(1) DEFAULT '0',
  PRIMARY KEY (`users_from_id`,`users_to_id`),
  KEY `fk_users_has_users_users1` (`users_to_id`),
  KEY `fk_users_has_users_users_idx` (`users_from_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `friends`
--

INSERT INTO `friends` (`users_from_id`, `users_to_id`, `accept_invit`) VALUES
(1, 2, '1'),
(1, 3, '1'),
(1, 4, '1'),
(2, 3, '1');

-- --------------------------------------------------------

--
-- Structure de la table `invites`
--

CREATE TABLE IF NOT EXISTS `invites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `key` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_invite_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `hosted` binary(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_galery_users1` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `users_id`, `title`, `description`, `path`, `hosted`, `created`) VALUES
(14, 1, 'SUP''Internet', 'SUP''Internet power !', './files/6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b/wallpaper.jpg', NULL, '2013-05-23 21:57:44'),
(15, 1, 'Suce MOI', 'Suce moi la nouille batard !', './files/6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b/hellgate_london-hd.jpg', NULL, '2013-05-25 19:55:34'),
(16, 1, 'EnculÃ©', 'Grosse bitch', './files/6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b/562258_486582524690817_1416478957_n.jpg', NULL, '2013-05-25 20:00:31'),
(18, 1, 'zegregsgsrg', 'sdsdgdgsdgsdgg', './files/6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b/Sans titre.png', NULL, '2013-05-25 22:28:00'),
(19, 3, 'poupou', 'ddzdazdzd', './files/4e07408562bedb8b60ce05c1decfe3ad16b72230967de01f640b7e4729b49fce/hd-wallpapers-1080p-wallpapers.jpg', NULL, '2013-05-26 01:02:22'),
(20, 3, 'ddazdadad', 'dzadzdazdazda', './files/4e07408562bedb8b60ce05c1decfe3ad16b72230967de01f640b7e4729b49fce/Wallpaper1.jpg', NULL, '2013-05-26 01:02:46'),
(21, 2, 'bouffon', 'connard de merde ta race la chauve !', './files/d4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35/Hydrangeas.jpg', NULL, '2013-05-26 01:03:41'),
(22, 2, 'zdadazddaz', 'boloossssss', './files/d4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35/Lighthouse.jpg', NULL, '2013-05-26 01:03:50'),
(23, 4, 'zdazdadazd', 'dazdazdadaz', './files/4b227777d4dd1fc61c6f884f48641d02b4d121d3fd328cb08b5531fcacdabf8a/Koala.jpg', NULL, '2013-05-26 01:45:08'),
(24, 4, 'dadzadzdadad', 'dadzadadadadzdad', './files/4b227777d4dd1fc61c6f884f48641d02b4d121d3fd328cb08b5531fcacdabf8a/Jellyfish.jpg', NULL, '2013-05-26 01:45:14');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(140) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_statuts_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `created`, `updated`) VALUES
(1, 1, 'Je suis une merde', '2013-05-28 17:29:54', NULL),
(2, 1, 'Je suis une grooseeee merde ', '2013-05-28 17:29:54', NULL),
(3, 2, 'Salut grosse bite !', '2013-05-28 17:29:54', NULL),
(4, 3, 'Salut enculé je suis super cool', '2013-05-28 17:29:54', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `private_message`
--

CREATE TABLE IF NOT EXISTS `private_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(32) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `date_send` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_read` datetime DEFAULT NULL,
  `receiver_deleted` binary(1) DEFAULT '0',
  `sender_deleted` binary(1) DEFAULT '0',
  `receiver_read` binary(1) DEFAULT '0',
  PRIMARY KEY (`id`,`sender_id`,`receiver_id`),
  KEY `fk_private_message_users1` (`sender_id`),
  KEY `fk_private_message_users2` (`receiver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `private_message`
--

INSERT INTO `private_message` (`id`, `sender_id`, `receiver_id`, `title`, `content`, `date_send`, `date_read`, `receiver_deleted`, `sender_deleted`, `receiver_read`) VALUES
(1, 2, 1, 'bouffon', 't''es un connard', '2013-05-23 22:38:06', NULL, '\0', NULL, NULL),
(2, 2, 1, 'Ahah', 'zdjzpodjefzeze', '2013-05-23 22:38:06', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rank_user`
--

CREATE TABLE IF NOT EXISTS `rank_user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rank_user`
--

INSERT INTO `rank_user` (`id`, `name`) VALUES
(1, 'membre'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank_user_id` int(11) NOT NULL,
  `actif` binary(1) NOT NULL DEFAULT '0',
  `email` varchar(355) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `description` text,
  `sexe` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `avatar_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`rank_user_id`),
  KEY `fk_users_rank_user1` (`rank_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `rank_user_id`, `actif`, `email`, `password`, `firstname`, `lastname`, `description`, `sexe`, `birthdate`, `address`, `zip_code`, `town`, `country`, `avatar_path`, `created`) VALUES
(1, 1, '1', 'aa@aa.fr', '1199a3e4cc65429bc91902e3e358face84a2970ae99c6fcf554bccd8badfbe9c', 'Baptiste', 'Gios', 'Je suis un ouf sisi', 'homme', '1992-08-20', NULL, NULL, NULL, NULL, './files/6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b/avatar.png', '2013-05-19 18:24:12'),
(2, 1, '1', 'benoit.ciret@supinternet.fr', '5012830448dba88f559b5360487df339ca8e64255f73970289bf668b4daa5292', 'Ismael', 'Tifous', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, './files/4b227777d4dd1fc61c6f884f48641d02b4d121d3fd328cb08b5531fcacdabf8a/avatar.jpg', '2013-05-19 22:20:45'),
(3, 1, '1', 'popo@gmail.com', '5012830448dba88f559b5360487df339ca8e64255f73970289bf668b4daa5292', 'Nicolas', 'Portier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, './files/4e07408562bedb8b60ce05c1decfe3ad16b72230967de01f640b7e4729b49fce/avatar.jpg', '2013-05-23 22:52:14'),
(4, 1, '1', 'kikou@gogole.fr', '5012830448dba88f559b5360487df339ca8e64255f73970289bf668b4daa5292', 'Benoit', 'Ciret', NULL, NULL, NULL, NULL, NULL, NULL, NULL, './files/d4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35/avatar.jpg', '2013-05-26 01:41:46');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_posts1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comments_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `fk_users_has_users_users` FOREIGN KEY (`users_from_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_users_users1` FOREIGN KEY (`users_to_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `invites`
--
ALTER TABLE `invites`
  ADD CONSTRAINT `fk_invite_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `fk_galery_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_statuts_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `private_message`
--
ALTER TABLE `private_message`
  ADD CONSTRAINT `fk_private_message_users1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_private_message_users2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_rank_user1` FOREIGN KEY (`rank_user_id`) REFERENCES `rank_user` (`id`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
