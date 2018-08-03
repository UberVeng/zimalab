-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 03 2018 г., 07:44
-- Версия сервера: 5.7.17
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_data`
--

CREATE TABLE `auth_data` (
  `id` int(10) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `phone_number_1` varchar(11) DEFAULT NULL,
  `phone_number_2` varchar(11) DEFAULT NULL,
  `phone_number_3` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_data`
--

INSERT INTO `auth_data` (`id`, `Username`, `Password`, `first_name`, `last_name`, `email`, `company`, `position`, `phone_number_1`, `phone_number_2`, `phone_number_3`) VALUES
(2, 'nekek', 'a846f392a1aac07602e796484e751216', '1', '1', '1', '1', '1', '1', '1', '1'),
(3, 'Ñ‚Ð¾Ð¿ÐºÐµÐº', '607cf8f5af465b2eaeb4c6e5218882ee', '1', '1', '1', '', '', '', '', ''),
(4, '12', 'c20ad4d76fe97759aa27a0c99bff6710', '1', '145', '1', '1', '', '', '', ''),
(5, 't1', '83f1535f99ab0bf4e9d02dfd85d3e3f7', '', '', '', '', '', '', '', ''),
(6, 't2', '0f826a89cf68c399c5f4cf320c1a5842', 't2t2', 't2t2', 't2', 't2', '', '', '', ''),
(8, 'lel', '0e00e5e62efa31ea7a66a0d0e98efe14', 'lel', 'ele', 'lel', '', '', '', '', ''),
(9, 'topkek', 'bd1b098d8cd6813d532c749b3f44c318', 'Top', 'kek', 'keker', 'kekci inc ', 'headkeker', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_data`
--
ALTER TABLE `auth_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auth_data`
--
ALTER TABLE `auth_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
