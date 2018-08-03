-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 03 2018 г., 08:08
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
(1, 'Topkek', 'bd1b098d8cd6813d532c749b3f44c318', 'Top', 'Kek', 'topkek@kek.topkek', 'Topkekers Inc.', 'Headkeker', '3303025', '', ''),
(2, 'Quinn Christopher', '1a70e565765052030ecdabe6cc6f24c5', 'Christopher', 'Quinn', 'cQuinn@gmail.com', '', '', '', '', ''),
(3, 'Bell Matthew', '1afadfb544a53d4bd3f807a13d6609f1', 'Matthew', 'Bell', 'mBell@gmail.com', '', '', '', '', ''),
(4, 'Conley George', '9b6c962193a72d1f34ac348779fdb748', 'George', 'Conley', 'gConley@gmail.com', '', '', '', '', ''),
(5, 'Hawkins Edward', '1de5e620fd72cd91281507b9804f607e', 'Edward', 'Hawkins', 'eHawkins@gmail.com', '', '', '', '', ''),
(6, 'Williamson Michael', 'b66f78c3fbd4fff00cb7a2b8f20be6ef', 'Michael', 'Williamson', 'mWilliamson@gmail.com', '', '', '', '', ''),
(7, 'Dorsey George', '6fc50a9633434c1d9921636e9415a84a', 'George', 'Dorsey', 'gDorsey@gmail.com', '', '', '', '', ''),
(8, 'Knight Dominick', '0753de65382db7a1c809de3dd343ade8', 'Dominick', 'Knight', 'dKnight@gmail.com', '', '', '', '', ''),
(9, 'Lawson John', 'fddc4e7eb76025fd426d5f0c0f90a711', 'John', 'Lawson', 'jLawson@gmail.com', '', '', '', '', '');

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
