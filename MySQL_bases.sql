-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 01 2022 г., 12:45
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `selects`
--
CREATE DATABASE IF NOT EXISTS `selects` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `selects`;

-- --------------------------------------------------------

--
-- Структура таблицы `select_1`
--

CREATE TABLE `select_1` (
  `id_select_1` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `select_1`
--

INSERT INTO `select_1` (`id_select_1`, `title`) VALUES
(1, 'Кухни'),
(2, 'Спальни'),
(3, 'Гостинные'),
(4, 'Прихожие'),
(5, 'Офисная мебель'),
(6, 'Детская');

-- --------------------------------------------------------

--
-- Структура таблицы `select_2`
--

CREATE TABLE `select_2` (
  `id_select_2` int UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `id_select_1` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `select_2`
--

INSERT INTO `select_2` (`id_select_2`, `title`, `id_select_1`) VALUES
(1, 'Модульные кухни', 1),
(2, 'Барная зона', 1),
(3, 'Кухонные уголки', 1),
(4, 'Обеденная зона', 1),
(5, 'Столы', 1),
(6, 'Стеновые панели', 1),
(7, 'Мойки, сушилки, смесители для кухни', 1),
(8, 'Дополнительная фурнитура', 1),
(9, 'Бытовая техника', 1),
(10, 'lorem_1', 2),
(11, 'lorem_2', 2),
(12, 'lorem_3', 2),
(13, 'lorem_4', 2),
(14, 'lorem_5', 2),
(15, 'lorem_6', 2),
(16, 'lorem_7', 3),
(17, 'lorem_8', 3),
(18, 'lorem_9', 3),
(19, 'lorem_10', 3),
(20, 'lorem_11', 3),
(21, 'lorem_12', 3),
(22, 'lorem_13', 3),
(23, 'lorem_14', 4),
(24, 'lorem_15', 4),
(25, 'lorem_16', 4),
(26, 'lorem_17', 4),
(27, 'lorem_18', 4),
(28, 'lorem_19', 4),
(29, 'lorem_20', 5),
(30, 'lorem_21', 5),
(31, 'lorem_22', 5),
(32, 'lorem_23', 5),
(33, 'lorem_24', 5),
(34, 'lorem_25', 5),
(35, 'lorem_26', 5),
(36, 'lorem_27', 5),
(37, 'lorem_28', 6),
(38, 'lorem_29', 6),
(39, 'lorem_30', 6),
(40, 'lorem_31', 6),
(41, 'lorem_32', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `select_3`
--

CREATE TABLE `select_3` (
  `id_select_3` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `id_select_2` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `select_3`
--

INSERT INTO `select_3` (`id_select_3`, `title`, `id_select_2`) VALUES
(1, 'Буфеты', 1),
(2, 'Барные стулья', 1),
(3, 'Барные стулья', 2),
(4, 'lorem_ipsum_1', 3),
(5, 'lorem_ipsum_2', 3),
(6, 'lorem_ipsum_3', 4),
(7, 'lorem_ipsum_4', 4),
(8, 'lorem_ipsum_5', 4),
(9, 'Журнальные столы', 5),
(10, 'Письменные столы', 5),
(11, 'lorem_ipsum_6', 6),
(12, 'lorem_ipsum_7', 6),
(13, 'lorem_ipsum_8', 6),
(14, 'lorem_ipsum_9', 6),
(15, 'lorem_ipsum_10', 7),
(16, 'lorem_ipsum_11', 7),
(17, 'lorem_ipsum_12', 7),
(18, 'lorem_ipsum_13', 7),
(19, 'lorem_ipsum_14', 8),
(20, 'lorem_ipsum_15', 8),
(21, 'lorem_ipsum_16', 8),
(22, 'lorem_ipsum_17', 8),
(23, 'lorem_ipsum_18', 8),
(24, 'lorem_ipsum_19', 8),
(25, 'lorem_ipsum_20', 9),
(26, 'lorem_ipsum_21', 9),
(27, 'lorem_ipsum_22', 10),
(28, 'lorem_ipsum_23', 10),
(29, 'lorem_ipsum_24', 10),
(30, 'lorem_ipsum_25', 11),
(31, 'lorem_ipsum_26', 11),
(32, 'lorem_ipsum_27', 11),
(33, 'lorem_ipsum_28', 11),
(34, 'lorem_ipsum_29', 12),
(35, 'lorem_ipsum_30', 12),
(36, 'lorem_ipsum_31', 13),
(37, 'lorem_ipsum_32', 13),
(38, 'lorem_ipsum_33', 13),
(39, 'lorem_ipsum_34', 13),
(40, 'lorem_ipsum_35', 13),
(41, 'lorem_ipsum_36', 14),
(42, 'lorem_ipsum_37', 14),
(43, 'lorem_ipsum_38', 15),
(44, 'lorem_ipsum_39', 15),
(45, 'lorem_ipsum_40', 16),
(46, 'lorem_ipsum_41', 16),
(47, 'lorem_ipsum_42', 16),
(48, 'lorem_ipsum_43', 16),
(49, 'lorem_ipsum_44', 17),
(50, 'lorem_ipsum_45', 17),
(51, 'lorem_ipsum_46', 17),
(52, 'lorem_ipsum_47', 18),
(53, 'lorem_ipsum_48', 18),
(54, 'lorem_ipsum_49', 18),
(55, 'lorem_ipsum_50', 18),
(56, 'lorem_ipsum_51', 18),
(57, 'lorem_ipsum_52', 19),
(58, 'lorem_ipsum_53', 19),
(59, 'lorem_ipsum_54', 19),
(60, 'lorem_ipsum_55', 20),
(61, 'lorem_ipsum_56', 21),
(62, 'lorem_ipsum_57', 21),
(63, 'lorem_ipsum_58', 22),
(64, 'lorem_ipsum_59', 22),
(65, 'lorem_ipsum_60', 22),
(66, 'lorem_ipsum_61', 22),
(67, 'lorem_ipsum_62', 22),
(68, 'lorem_ipsum_63', 22),
(69, 'lorem_ipsum_64', 23),
(70, 'lorem_ipsum_65', 23),
(71, 'lorem_ipsum_66', 23),
(72, 'lorem_ipsum_67', 24),
(73, 'lorem_ipsum_68', 24),
(74, 'lorem_ipsum_69', 25),
(75, 'lorem_ipsum_70', 25),
(76, 'lorem_ipsum_71', 25),
(77, 'lorem_ipsum_72', 26),
(78, 'lorem_ipsum_73', 26),
(79, 'lorem_ipsum_74', 26),
(80, 'lorem_ipsum_75', 26),
(81, 'lorem_ipsum_76', 27),
(82, 'lorem_ipsum_77', 27),
(83, 'lorem_ipsum_78', 27),
(84, 'lorem_ipsum_79', 27),
(85, 'lorem_ipsum_80', 27),
(86, 'lorem_ipsum_81', 28),
(87, 'lorem_ipsum_82', 28),
(88, 'lorem_ipsum_83', 29),
(89, 'lorem_ipsum_84', 29),
(90, 'lorem_ipsum_85', 29),
(91, 'lorem_ipsum_86', 29),
(92, 'lorem_ipsum_87', 30),
(93, 'lorem_ipsum_88', 30),
(94, 'lorem_ipsum_89', 31),
(95, 'lorem_ipsum_90', 31),
(96, 'lorem_ipsum_91', 31),
(97, 'lorem_ipsum_92', 32),
(98, 'lorem_ipsum_93', 32),
(99, 'lorem_ipsum_94', 32),
(100, 'lorem_ipsum_95', 32),
(101, 'lorem_ipsum_96', 33),
(102, 'lorem_ipsum_97', 33),
(103, 'lorem_ipsum_98', 33),
(104, 'lorem_ipsum_99', 34),
(105, 'lorem_ipsum_100', 34),
(106, 'lorem_ipsum_101', 35),
(107, 'lorem_ipsum_102', 35),
(108, 'lorem_ipsum_103', 35),
(109, 'lorem_ipsum_104', 35),
(110, 'lorem_ipsum_105', 35),
(111, 'lorem_ipsum_106', 35),
(112, 'lorem_ipsum_107', 35),
(113, 'lorem_ipsum_108', 36),
(114, 'lorem_ipsum_109', 36),
(115, 'lorem_ipsum_110', 36),
(116, 'lorem_ipsum_111', 37),
(117, 'lorem_ipsum_112', 37),
(118, 'lorem_ipsum_113', 38),
(119, 'lorem_ipsum_114', 38),
(120, 'lorem_ipsum_115', 39),
(121, 'lorem_ipsum_116', 39),
(122, 'lorem_ipsum_117', 39),
(123, 'lorem_ipsum_118', 40),
(124, 'lorem_ipsum_119', 40),
(125, 'lorem_ipsum_120', 41),
(126, 'lorem_ipsum_121', 41),
(127, 'lorem_ipsum_122', 41),
(128, 'lorem_ipsum_123', 41),
(129, 'lorem_ipsum_124', 42),
(130, 'lorem_ipsum_125', 42),
(131, 'lorem_ipsum_126', 42),
(132, 'lorem_ipsum_127', 43),
(133, 'lorem_ipsum_128', 43),
(134, 'lorem_ipsum_129', 44),
(135, 'lorem_ipsum_130', 44),
(136, 'lorem_ipsum_131', 44),
(137, 'lorem_ipsum_132', 44),
(138, 'lorem_ipsum_133', 45),
(139, 'lorem_ipsum_134', 45),
(140, 'lorem_ipsum_135', 45),
(141, 'lorem_ipsum_136', 45),
(142, 'lorem_ipsum_137', 46),
(143, 'lorem_ipsum_138', 46),
(144, 'lorem_ipsum_139', 47),
(145, 'lorem_ipsum_140', 47),
(146, 'lorem_ipsum_141', 47),
(147, 'lorem_ipsum_142', 48),
(148, 'lorem_ipsum_143', 48),
(149, 'lorem_ipsum_144', 48),
(150, 'lorem_ipsum_145', 48),
(151, 'lorem_ipsum_146', 48),
(152, 'lorem_ipsum_147', 48),
(153, 'lorem_ipsum_148', 48);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `select_1`
--
ALTER TABLE `select_1`
  ADD PRIMARY KEY (`id_select_1`);

--
-- Индексы таблицы `select_2`
--
ALTER TABLE `select_2`
  ADD PRIMARY KEY (`id_select_2`);

--
-- Индексы таблицы `select_3`
--
ALTER TABLE `select_3`
  ADD PRIMARY KEY (`id_select_3`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `select_1`
--
ALTER TABLE `select_1`
  MODIFY `id_select_1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `select_2`
--
ALTER TABLE `select_2`
  MODIFY `id_select_2` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `select_3`
--
ALTER TABLE `select_3`
  MODIFY `id_select_3` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- База данных: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `surname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `telephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `street` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `house` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `flat` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `name`, `surname`, `telephone`, `city`, `street`, `house`, `flat`) VALUES
(1, 'Bibop733', 'Bibop733@gmail.com', '$2y$10$K8kFf9hvTaTOcYTjDyEEkOwGG36tI.RpeyJp07De0g105lPwEKwNu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Lepo23', 'Lepo@mail.ru', '$2y$10$NV/4eu3KJcfOuB5pL7Y2u.mBjLX7Dr23ptHaimNocFCPjel3iqvlq', 'Lesly', 'Nilsen', '89999999999', 'New York', '9 and 3/4', '22', '11'),
(3, 'Kebab23323', 'KebabLOL@lol.com', '$2y$10$5U4Rki4s6dfORUSdQZpltedOQBVyQcswsIRfgd2uqeBVyPbXB.X6y', 'Kebab', 'Travmagomedov', '89113455356', 'Mahachkala', '9 and 3/4', '2323', '323'),
(4, 'dffdf', 'dffdf@sdd.com', '$2y$10$b6F06mKU83XvQWkBvyg16eR7gJ4Q2mezPlPOaUT3JSwk2BrIqA5zC', 'fdsfd', 'dsffsdf', 'dsffsdf', 'dfsf', 'dsfdd', 'dssfsdf', 'dsfd'),
(5, 'mmm', 'mmm@mmmm.com', '$2y$10$pNZAlb2WQNunZ49UKHnire1wG19ctbFkBpVhdnLz1OGepDbqSh1/e', 'mmm', 'lolo', '23343432443', 'los santos', 'sfffd', '324', '44'),
(6, 'dffdfeweew', 'dfff@gmail.com', '$2y$10$Jlf2hlUzfgnoynf6xNCAoe0e5wK2v9QAeYYoWWtxZpEijALnnZXjO', 'fdfgf', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'dffdfeweewff', 'dffff@gmail.com', '$2y$10$yFilMImmt9kPfbqe5HE54OQ8Ln35WQb8CymRozwL.ViNtscz8oV6i', 'fdfgf', '', '', '', '', '', ''),
(8, 'dffddfeweewff', 'dfffff@gmail.com', '$2y$10$U0mta1C/sDbdVqwxBv4JOOYgG3ustueDcZy6/RXmA3zvyJ6Aq7nl.', 'fdfgf', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- База данных: `мебель loft`
--
CREATE DATABASE IF NOT EXISTS `мебель loft` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `мебель loft`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` int NOT NULL,
  `discount` varchar(4) NOT NULL,
  `width` int NOT NULL,
  `height` int NOT NULL,
  `depth` int NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `discount`, `width`, `height`, `depth`, `image`) VALUES
(1, 'Валенсия Beige', 'Барные стулья', 2300, '0', 48, 87, 51, '/images/title_page/image 2.png'),
(2, 'Толикс-2 White Gloss', 'Барные стулья', 4690, '0', 44, 82, 45, '/images/title_page/image 2-26.png'),
(3, 'Динс Velvet Yellow', 'Диваны', 28490, '25', 135, 46, 51, '/images/title_page/image 2-27.png'),
(4, 'Кускен Navy Blue', 'Диваны', 2300, '0', 122, 45, 46, '/images/title_page/image 2-1.png'),
(5, 'Шерона Barhat Grey', 'Двухспальные кровати', 21990, '0', 148, 45, 110, '/images/title_page/image 2-2.png'),
(6, 'Авиньон-1', 'Буфеты', 18990, '0', 52, 170, 45, '/images/title_page/image 2-15.png'),
(7, 'Стелла Дуб Сонома', 'Комоды', 8990, '0', 48, 87, 51, '/images/title_page/image 2-16.png'),
(8, 'Равенна-1 Light', 'Комоды', 14990, '0', 42, 70, 60, '/images/title_page/image 2-17.png'),
(9, 'Бенфлит Grey', 'Журнальные столы', 7290, '0', 45, 75, 45, '/images/title_page/image 2-18.png'),
(10, 'Тиффани Вудлайн Крем', 'Письменные столы', 10990, '0', 43, 43, 77, '/images/title_page/image 2-19.png'),
(11, 'Валенсия Beige', 'Шкафы', 19990, '0', 43, 170, 77, '/images/title_page/image 2-20.png'),
(12, 'Лайт-3-170-240 Белый', 'Шкафы', 27290, '0', 43, 165, 77, '/images/title_page/image 2-21.png'),
(13, 'Вилли Pink', 'Детский диван', 21990, '0', 43, 43, 77, '/images/title_page/image 2-22.png'),
(14, 'Сан-Паулу Velvet Brown', 'Диваны', 25990, '0', 200, 43, 77, '/images/title_page/image 2-13.png'),
(15, 'Saloon', 'Барные стулья', 10990, '10', 43, 43, 77, '/images/title_page/saloon.png'),
(16, 'Oscar серый велюр', 'Барные стулья', 7000, '15', 43, 43, 77, '/images/title_page/oscar.png'),
(17, 'BOSS рогожка Malmo серая', 'Двухспальные кровати', 24290, '5', 169, 80, 75, '/images/title_page/BOSS.png'),
(18, 'Медли-1 Pink', 'Журнальные столы', 5590, '0', 50, 45, 50, '/images/title_page/pink.png'),
(19, 'Монблан-2 Time Графит', 'Комоды', 26990, '18', 139, 75, 50, '/images/title_page/Monblan.png'),
(20, 'Теджонс-1 Time Deco Aquamarine', 'Комоды', 19990, '0', 46, 108, 50, '/images/title_page/Tejons.png'),
(21, 'Берли', 'Журнальные столы', 7490, '0', 90, 47, 50, '/images/title_page/Berly.png'),
(22, 'Берлин-1 Белый', 'Письменные столы', 7990, '0', 120, 75, 56, '/images/title_page/Berlin.png'),
(23, 'Монблан-4 Time Аквамарин', 'Шкафы', 69990, '0', 185, 215, 50, '/images/title_page/Monblan_2.png'),
(24, 'Теджонс-2 Time Art Milk', 'Шкафы', 39990, '0', 92, 224, 50, '/images/title_page/Tejons_2.png'),
(25, 'Санта, вельвет бархатного типа', 'Детский диван', 11990, '0', 153, 90, 82, '/images/title_page/santa.png'),
(26, 'Купер черный, хром', 'Барные стулья', 5290, '0', 53, 81, 48, '/images/title_page/kuper.png'),
(27, 'Beetle экокожа бежевый', 'Барные стулья', 9990, '0', 46, 113, 54, '/images/title_page/beetle-ekokozha.png'),
(28, 'Лилиан бирюзовый', 'Барные стулья', 8590, '0', 47, 109, 41, '/images/title_page/lilian-biryuzovyy.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
