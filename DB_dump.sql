-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 23 2015 г., 14:05
-- Версия сервера: 5.5.43-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Июн 23 2015 г., 06:17
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(50) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `cookie` varchar(30) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_login_2` (`user_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `cookie`, `first_name`, `last_name`, `gender`, `date`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admincookie', 'admin', 'admin', 'male', NULL),
(2, 'horse', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', NULL, NULL, NULL, NULL),
(9, 'Ultra', '50050d5b621c8495f8344b18dd856cbb2ca53966', 'Ultracookie', 'Alexey', 'Bizert', 'male', '2015-06-16'),
(10, 'test', 'e6e9d73f8c2945f33970e2cd8ecf6a1543a54646', '', 'test ', 'test', 'male', '2027-06-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
