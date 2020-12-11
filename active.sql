-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2020 г., 20:02
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `active`
--

-- --------------------------------------------------------

--
-- Структура таблицы `active`
--

CREATE TABLE `active` (
  `id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nalcost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ostatcost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `osencost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketcost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `active`
--

INSERT INTO `active` (`id`, `company`, `place`, `money`, `address`, `nalcost`, `ostatcost`, `osencost`, `marketcost`, `value`, `item`) VALUES
(9, 'Eвробанк', 'на счету №5', '1000', '', '', '', '', '', 'Рублей', NULL),
(10, 'Внештогабке', 'На счету №3', '5', '', '', '', '', '', '$', NULL),
(11, '', 'В кассе', '100', '', '', '', '', '', 'Р', NULL),
(12, 'ТЗ в 1970г', 'инвентарь 7', '', '', '30000', '5000', '1000000', '', 'Рублей', NULL),
(13, '', 'в кассе', '3000', '', '', '', '', '', 'рублей', 'талон');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `active`
--
ALTER TABLE `active`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `active`
--
ALTER TABLE `active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
