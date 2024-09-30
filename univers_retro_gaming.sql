-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2024 at 03:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univers_retro_gaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `console_id` int NOT NULL,
  `console_name` varchar(100) NOT NULL,
  `console_year` int NOT NULL,
  `console_description` varchar(510) NOT NULL,
  `console_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`console_id`, `console_name`, `console_year`, `console_description`, `console_img`) VALUES
(3, 'Master System', 1985, 'la première console de Sega', 'upload/66f3ddb21a4b7-Sega-Master-System-Set.png'),
(4, 'nintendo NES', 1985, 'la console de mon enfance', 'upload/66f3ddde57616-NES-Console-Set.png');

-- --------------------------------------------------------

--
-- Table structure for table `console_game`
--

CREATE TABLE `console_game` (
  `tableInt_console_id` int NOT NULL,
  `tableInt_console_game_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int NOT NULL,
  `game_titre` varchar(100) NOT NULL,
  `game_year` int NOT NULL,
  `game_description` varchar(510) NOT NULL,
  `game_img` varchar(100) NOT NULL,
  `pegi_id` int NOT NULL,
  `autor_id` int NOT NULL,
  `date_article` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_titre`, `game_year`, `game_description`, `game_img`, `pegi_id`, `autor_id`, `date_article`) VALUES
(69, 'Mario kart', 1995, 'jeux de courses qui promet des heures de rigolade entre amis', 'upload/66f3ce141df17-supermariokart-sn.jpg', 1, 1, '2024-06-25'),
(70, 'Super Mario Bros', 1985, 'The collector game', 'upload/66f3cee31ca37-super_mario_bros.jpg', 1, 5, '2024-06-25'),
(75, 'sonic', 1991, 'le hérisson bleu le plus rapide du monde', 'upload/66f3d88ee1125-sonic.jpg', 1, 6, '2024-06-25'),
(76, 'sonic 2', 1995, 'La suite de Sonic avec Tails en plus on peut jouer à 2', 'upload/66f3d943326d0-sonic2.jpg', 1, 6, '2024-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `game_genre`
--

CREATE TABLE `game_genre` (
  `tableInt_genre_id` int NOT NULL,
  `tableInt_game_genre_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `game_genre`
--

INSERT INTO `game_genre` (`tableInt_genre_id`, `tableInt_game_genre_id`) VALUES
(1, 70),
(1, 75),
(1, 76),
(2, 69);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int NOT NULL,
  `genre_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'plateforme'),
(2, 'course'),
(3, 'combat'),
(4, 'sport'),
(5, 'aventure'),
(6, 'action');

-- --------------------------------------------------------

--
-- Table structure for table `pegi`
--

CREATE TABLE `pegi` (
  `pegi_id` int NOT NULL,
  `pegi_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pegi`
--

INSERT INTO `pegi` (`pegi_id`, `pegi_img`) VALUES
(1, 'src/img/pegi/pegi3.png'),
(2, 'src/img/pegi/pegi7.png'),
(3, 'src/img/pegi/pegi12.png'),
(4, 'src/img/pegi/pegi16.png'),
(5, 'src/img/pegi/pegi18.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `town` varchar(60) NOT NULL,
  `town_cp` int NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `pseudo`, `birthdate`, `adresse`, `town`, `town_cp`, `email`, `password`) VALUES
(1, 'Deswarte', 'Cédric', 'super admin', '1981-06-20', '', 'Onet-le-chateau', 12850, 'cedric.deswarte81@gmail.com', '$2y$10$2yz.duhnQu2krSFgfGvJE.spVVHdgzS2Tw8jFj5yMSnp7e8r2fiei'),
(5, 'Deswarte', 'Cédric', 'manwë', '1981-06-20', '4 rue du fer à cheval', 'Onet-le-chateau', 12850, 'cedcile1901@gmail.com', '$2y$10$Zxpeynlt5/iEkCGlvw4t7uEP7.Fx/z8gF2JBIDe5xS2Sj0ugbxQWi'),
(6, 'Deswarte', 'Robin', 'robin', '2013-08-13', '4 rue du fer à cheval', 'Onet-le-chateau', 12850, 'deswarte.robin@gmail.com', '$2y$10$TxRjXPaKJ.phwB55hUAYI.0.AfmsdUDAE2pwhvT.DAzilEe.w02ZG'),
(7, 'Fourmaux', 'Grégory', 'egregorion', '1985-05-07', '10 les fougères', 'Saint Agnant de Versillat', 23300, 'gregory.fourmaux@afpa.fr', '$2y$10$sS0y.5iaV8wt6E63.VfS2.2yoBhbNdlPMBow0tLifMqiLYVHPART6');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `id_comment` int NOT NULL,
  `comment` varchar(510) NOT NULL,
  `tableInt_autor_id` int NOT NULL,
  `tableInt_comment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id_comment`, `comment`, `tableInt_autor_id`, `tableInt_comment_id`) VALUES
(34, 'Test commentaire en dur', 7, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`console_id`);

--
-- Indexes for table `console_game`
--
ALTER TABLE `console_game`
  ADD PRIMARY KEY (`tableInt_console_id`,`tableInt_console_game_id`),
  ADD KEY `FK_game_console_id` (`tableInt_console_game_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `FK_id_pegi` (`pegi_id`),
  ADD KEY `FK_id_user` (`autor_id`);

--
-- Indexes for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD PRIMARY KEY (`tableInt_genre_id`,`tableInt_game_genre_id`),
  ADD KEY `FK_genre_id` (`tableInt_genre_id`),
  ADD KEY `FK_game_genre` (`tableInt_game_genre_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `pegi`
--
ALTER TABLE `pegi`
  ADD PRIMARY KEY (`pegi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD UNIQUE KEY `comment` (`comment`,`tableInt_autor_id`,`tableInt_comment_id`),
  ADD KEY `FK_comment_autor` (`tableInt_autor_id`),
  ADD KEY `FK_comment_id` (`tableInt_comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `console_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegi`
--
ALTER TABLE `pegi`
  MODIFY `pegi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `console_game`
--
ALTER TABLE `console_game`
  ADD CONSTRAINT `FK_console_id` FOREIGN KEY (`tableInt_console_id`) REFERENCES `console` (`console_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_game_console_id` FOREIGN KEY (`tableInt_console_game_id`) REFERENCES `game` (`game_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `FK_id_pegi` FOREIGN KEY (`pegi_id`) REFERENCES `pegi` (`pegi_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_id_user` FOREIGN KEY (`autor_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD CONSTRAINT `FK_game_genre` FOREIGN KEY (`tableInt_game_genre_id`) REFERENCES `game` (`game_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_genre_id` FOREIGN KEY (`tableInt_genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD CONSTRAINT `FK_comment_autor` FOREIGN KEY (`tableInt_autor_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_comment_id` FOREIGN KEY (`tableInt_comment_id`) REFERENCES `game` (`game_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
