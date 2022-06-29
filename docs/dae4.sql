-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 juin 2022 à 15:47
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dae4`
--

-- --------------------------------------------------------

--
-- Structure de la table `daes`
--

DROP TABLE IF EXISTS `daes`;
CREATE TABLE IF NOT EXISTS `daes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date de création',
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'dernière date de modification',
  `poste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'libellé du poste',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dae_user`
--

DROP TABLE IF EXISTS `dae_user`;
CREATE TABLE IF NOT EXISTS `dae_user` (
  `id` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL DEFAULT '0',
  `dae_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `queued_jobs`
--

DROP TABLE IF EXISTS `queued_jobs`;
CREATE TABLE IF NOT EXISTS `queued_jobs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `job_task` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text,
  `job_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `notbefore` datetime DEFAULT NULL,
  `fetched` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `progress` float DEFAULT NULL,
  `failed` int NOT NULL DEFAULT '0',
  `failure_message` text,
  `workerkey` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `queue_phinxlog`
--

DROP TABLE IF EXISTS `queue_phinxlog`;
CREATE TABLE IF NOT EXISTS `queue_phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `queue_processes`
--

DROP TABLE IF EXISTS `queue_processes`;
CREATE TABLE IF NOT EXISTS `queue_processes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pid` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `terminate` tinyint(1) NOT NULL DEFAULT '0',
  `server` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerkey` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `workerkey` (`workerkey`),
  UNIQUE KEY `pid` (`pid`,`server`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_items`
--

DROP TABLE IF EXISTS `state_machine_items`;
CREATE TABLE IF NOT EXISTS `state_machine_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifier` int NOT NULL,
  `state_machine` varchar(90) NOT NULL,
  `process` varchar(90) DEFAULT NULL,
  `state` varchar(90) DEFAULT NULL,
  `state_machine_transition_log_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifier` (`identifier`,`state_machine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_item_states`
--

DROP TABLE IF EXISTS `state_machine_item_states`;
CREATE TABLE IF NOT EXISTS `state_machine_item_states` (
  `id` int NOT NULL AUTO_INCREMENT,
  `state_machine_process_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`state_machine_process_id`),
  KEY `state_machine_process_id` (`state_machine_process_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_item_state_logs`
--

DROP TABLE IF EXISTS `state_machine_item_state_logs`;
CREATE TABLE IF NOT EXISTS `state_machine_item_state_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `state_machine_item_state_id` int NOT NULL,
  `identifier` int NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identifier` (`identifier`,`state_machine_item_state_id`),
  KEY `state_machine_item_state_id` (`state_machine_item_state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_locks`
--

DROP TABLE IF EXISTS `state_machine_locks`;
CREATE TABLE IF NOT EXISTS `state_machine_locks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifier` varchar(150) NOT NULL,
  `expires` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifier` (`identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_phinxlog`
--

DROP TABLE IF EXISTS `state_machine_phinxlog`;
CREATE TABLE IF NOT EXISTS `state_machine_phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_processes`
--

DROP TABLE IF EXISTS `state_machine_processes`;
CREATE TABLE IF NOT EXISTS `state_machine_processes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state_machine` varchar(90) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`state_machine`),
  KEY `state_machine` (`state_machine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_timeouts`
--

DROP TABLE IF EXISTS `state_machine_timeouts`;
CREATE TABLE IF NOT EXISTS `state_machine_timeouts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `state_machine_item_state_id` int NOT NULL,
  `state_machine_process_id` int NOT NULL,
  `identifier` int NOT NULL,
  `event` varchar(50) NOT NULL,
  `timeout` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifier` (`identifier`,`state_machine_item_state_id`),
  KEY `timeout` (`timeout`),
  KEY `state_machine_process_id` (`state_machine_process_id`),
  KEY `state_machine_item_state_id` (`state_machine_item_state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `state_machine_transition_logs`
--

DROP TABLE IF EXISTS `state_machine_transition_logs`;
CREATE TABLE IF NOT EXISTS `state_machine_transition_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `state_machine_process_id` int NOT NULL,
  `state_machine_item_id` int NOT NULL,
  `identifier` int NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `event` varchar(50) DEFAULT NULL,
  `params` varchar(255) DEFAULT NULL,
  `source_state` varchar(90) DEFAULT NULL,
  `target_state` varchar(90) DEFAULT NULL,
  `command` varchar(90) DEFAULT NULL,
  `condition` varchar(90) DEFAULT NULL,
  `is_error` tinyint(1) NOT NULL DEFAULT '0',
  `error_message` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `state_machine_process_id` (`state_machine_process_id`),
  KEY `state_machine_item_id` (`state_machine_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'date de création',
  `modified` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'date de la dernière modification',
  `created_by` int NOT NULL COMMENT 'id du créateur de l''enreg.',
  `modified_by` int NOT NULL COMMENT 'id du user ayant modifié l''enreg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `state_machine_item_states`
--
ALTER TABLE `state_machine_item_states`
  ADD CONSTRAINT `state_machine_item_states_ibfk_1` FOREIGN KEY (`state_machine_process_id`) REFERENCES `state_machine_processes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `state_machine_item_state_logs`
--
ALTER TABLE `state_machine_item_state_logs`
  ADD CONSTRAINT `state_machine_item_state_logs_ibfk_1` FOREIGN KEY (`state_machine_item_state_id`) REFERENCES `state_machine_item_states` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `state_machine_timeouts`
--
ALTER TABLE `state_machine_timeouts`
  ADD CONSTRAINT `state_machine_timeouts_ibfk_1` FOREIGN KEY (`state_machine_process_id`) REFERENCES `state_machine_processes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `state_machine_timeouts_ibfk_2` FOREIGN KEY (`state_machine_item_state_id`) REFERENCES `state_machine_item_states` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `state_machine_transition_logs`
--
ALTER TABLE `state_machine_transition_logs`
  ADD CONSTRAINT `state_machine_transition_logs_ibfk_1` FOREIGN KEY (`state_machine_process_id`) REFERENCES `state_machine_processes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `state_machine_transition_logs_ibfk_2` FOREIGN KEY (`state_machine_item_id`) REFERENCES `state_machine_items` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
