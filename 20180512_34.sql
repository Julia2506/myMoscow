-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 10 2019 г., 17:55
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `20180512_34`
--
CREATE DATABASE IF NOT EXISTS `20180512_34` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `20180512_34`;

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h3` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `src` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`id`, `h3`, `content`, `src`, `priority`, `active`) VALUES
(1, 'Необычные маршруты', 'Мы обязательно порадуем тебя необычными маршрутами Москвы, которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о Москве то, что никогда не знал!', '/icon/map.png', 10, 1),
(2, 'Классные сувениры', 'Отличная новость! У нас появился магазин сувениров! И самое примечательное, что все эти сувениры мы делаем сами! Заходи к нам в гости!', '/icon/souvenir.png', 20, 1),
(3, 'Интересные экскурсии', 'За время экскурсий, которых у нас больше 20, ты узнаешь и увидишь все основные досопримечательности: Кремль, Храм Христа Спаcителя, так и пройдешься по пешеходным улицам Москвы, узнаешь их историю и сделаешь самые классные фотографии.', '/icon/compass.png', 30, 1),
(4, 'Фотосессии в Москве', 'Команда MyMoscow рада провести креативные фотосессии в любом уголке Москвы. Не важно, свадьба у Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.', '/icon/picture.png', 40, 1),
(5, 'Новые знакомства', 'MyMoscow - это целый клуб, где после московских проулок ты сможешь продолжить общение с теми, кому интересна Москва , знакомиться с новыми людьми и делиться впечатлениями.', '/icon/discussion.png', 50, 1),
(6, 'Яркие впечатления', 'Самое важное - это яркие эмоции, которые останутся с тобой на долгое время! Поэтому в нашей команде мы ждем именно тебя!', '/icon/sun.png', 60, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `usertel` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `leads`
--

INSERT INTO `leads` (`id`, `username`, `useremail`, `usertel`, `message`) VALUES
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, 'xcvbnm', 'gdfjlkh@swrtwe', '5455656655', ''),
(16, 'VVFUIOP', 'GYYGIO@FRGUY', '123456789', ''),
(17, 'FGHJKL', 'RIEIEI@DJDJJD', '334444444', 'FFGH'),
(18, 'fgh', 'dg@hfjf', '34567', 'fgh'),
(19, 'fgh', 'dg@hfjf', '34567', 'fgh'),
(20, 'fgh', 'dg@hfjf', '34567', 'fgh'),
(21, 'fgh', 'dg@hfjf', '34567', 'fgh'),
(22, 'dfg', 'dg@ghjm', '3456', 'dfghj'),
(23, 'dfg', 'dg@ghjm', '3456', 'dfghj'),
(24, 'dfg', 'dg@ghjm', '3456', 'dfghj'),
(25, 'dfg', 'dg@ghjm', '3456', 'dfghj'),
(26, 'dfg', 'dg@ghjm', '3456', 'dfghj'),
(27, 'dfg', 'dg@ghjm', '3456', 'dfghj'),
(28, 'dfg', 'dg@ghjm', '3456', 'dfghj'),
(29, 'rrrrr', 'rrrr@rrrr', '4444444', 'rrrrr'),
(30, 'rrrrr', 'rrrr@rrrr', '4444444', 'rrrrr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
