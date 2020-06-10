-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Июн 10 2020 г., 10:55
-- Версия сервера: 8.0.18
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
-- База данных: `database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL,
  `user1` text NOT NULL,
  `user2` text NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bet` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `time` time NOT NULL,
  `games` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `loses` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `players`
--

INSERT INTO `players` (`id`, `login`, `time`, `games`, `wins`, `loses`, `rating`) VALUES
(0, 'az', '00:00:00', 1, 0, 1, -100),
(0, 'ann', '00:00:00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `token`) VALUES
(0, 'ann', '$2y$10$n0bUwZyV3TRUtdztVihu1eKRe6K.ufbwEZSTYZRpbMnbfUQeiXJ3e', 'a052befe0d8ab36885b3620ddb9e2b6519f745dc088e78aa63e82b139f640a45'),
(0, 'az', '$2y$10$.IRp5LlpEQgFL1wqbgq5cuM6JxYSYbQHJkSl9HB5ztZuiApspsCX.', 'c0ceeb1adc89d71b594ca49509268396db89263aca5fba087c448286a14fe6fb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
