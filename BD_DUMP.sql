-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 24 2015 г., 20:33
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
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `message_id` int(5) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `message_id`, `comment`) VALUES
(1, 1, 25, 'cool'),
(2, 1, 7, ';o'),
(3, 1, 28, 'ytuty'),
(4, 1, 25, 'ahahahahhha'),
(5, 1, 7, 'ahahhahha'),
(19, 1, 25, 'p'),
(20, 1, 39, 'ooo'),
(21, 8, 40, 'nice'),
(22, 8, 7, 'p'),
(23, 8, 7, 'pp'),
(24, 8, 7, 'pp'),
(25, 8, 7, 'kjk'),
(26, 8, 7, 'pp'),
(27, 8, 7, 'p'),
(28, 8, 7, 'pp'),
(29, 8, 37, 'p'),
(30, 8, 37, 'pp'),
(31, 8, 37, '[['),
(32, 8, 37, ''),
(33, 8, 25, '['),
(34, 12, 54, 'tsrtrs'),
(35, 9, 65, 'strrrrs');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `header_message` varchar(30) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `header_message`, `message`) VALUES
(7, 1, 'First', 'first message'),
(8, 2, 'Second', 'Second message'),
(9, 1, 'Third', 'Third message'),
(10, 2, 'Fourth', 'Fourth message'),
(27, 4, 'q', '''1''&quot;2&quot;\\''3\\''\\&quot;4\\&quot;'),
(29, 4, '''1''&quot;2&quot;\\''3\\''\\&quot;4\\', '''1''&quot;2&quot;\\''3\\''\\&quot;4\\&quot;'),
(63, 9, 'rasar', 'sraars'),
(67, 9, 'rrrrrrrrrrrrrr', 'sssssssssssss'),
(69, 0, 'rasar', 'sarsras'),
(70, 0, 'rstrs', 'tarstar'),
(71, 0, 'rstrst', 'rstrstr'),
(72, 0, 'rstrs', 'rstrst'),
(73, 0, 'rstrstr', 'srtrstrs');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `cookie`, `first_name`, `last_name`, `gender`, `date`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admincookie', 'admin', 'admin', 'male', '2015-06-02'),
(9, 'Ultra', '50050d5b621c8495f8344b18dd856cbb2ca53966', 'Ultracookie', 'Alexey', 'Bizert', 'male', '2015-06-16'),
(11, 'aaaaa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 'aaaaaaaaaaaa', 'vvvvvvvvvvvvvv', 'male', '0000-00-00'),
(12, '333', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', '', '333', '333', 'female', '0000-00-00'),
(13, '4444444444444', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 'tts', 'neen', 'male', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
