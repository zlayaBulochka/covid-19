-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 10 2020 г., 11:22
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pig`
--

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1` varchar(64) DEFAULT NULL,
  `user2` varchar(64) DEFAULT NULL,
  `score1` int(3) NOT NULL DEFAULT 0,
  `score2` int(3) NOT NULL DEFAULT 0,
  `total` int(1) NOT NULL DEFAULT 0,
  `bet` int(1) NOT NULL DEFAULT 0,
  `status` varchar(64) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `user1`, `user2`, `score1`, `score2`, `total`, `bet`, `status`) VALUES
(19, 'kate', 'lala', 13, 12, 2, 2, '4'),
(18, 'Unicorn', 'Doggo', 57, 40, 6, 6, '4');

-- --------------------------------------------------------

--
-- Структура таблицы `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) DEFAULT NULL,
  `time` int(11) DEFAULT 0,
  `games` int(11) NOT NULL DEFAULT 0,
  `wins` int(11) NOT NULL DEFAULT 0,
  `loses` int(11) NOT NULL DEFAULT 0,
  `rating` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `players`
--

INSERT INTO `players` (`id`, `login`, `time`, `games`, `wins`, `loses`, `rating`) VALUES
(12, 'lala', 0, 0, 0, 0, 0),
(11, 'kate', NULL, 1, 0, 1, -100),
(9, 'Unicorn', NULL, 7, 0, 7, -400),
(10, 'Doggo', 0, 3, 3, 0, 101);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `token` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `token`) VALUES
(11, 'lala', '$2y$10$CLdE7DxvGq/vtt6HsJ/jIOw2tpTrLudqpO8xLJ3vPwIdWsIigt5WC', '281451a9ac62883d0e25b8483d85abe6b4fe765d766158e859d073ce5e17a1f4'),
(10, 'kate', '$2y$10$FyWkXVjx1lfGgdvqMPsXl.EXqNbHBZJSiJI7WXIVzJqWi/hdY66EC', '21a26d9bab23526bedae01a3b15ae4ac42d0524deabddd4732fea1468c4afa96'),
(8, 'Unicorn', '$2y$10$e45bKuDXdk69cQTcQX9sROhhozNVWI48VAdwYA0C2VQPy0Cf54.vS', 'c7e3228e1f1a3097b7319f81fdbe9efb35c05bc2ebccfe6cb0c5a3d3046de3dc'),
(9, 'Doggo', '$2y$10$Uep28DP6bVyCKMi0wUYTG.EE34UC0gf8xWwnWeU6mMA0JH4Xa3Arq', 'b3fc5eb99e13583b08c4dbc3a7ddfff63e237dad279749a9a3e11400a055c963');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
