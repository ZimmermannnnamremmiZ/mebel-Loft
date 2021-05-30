-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2021 г., 11:18
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `мебель loft`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` int NOT NULL,
  `width` int NOT NULL,
  `height` int NOT NULL,
  `depth` int NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `width`, `height`, `depth`, `image`) VALUES
(1, 'Валенсия Beige', 'Барные стулья', 2300, 43, 43, 77, '/images/image 2.png'),
(2, 'Толикс-2 White Gloss', 'Барные стулья', 4690, 43, 43, 77, '/images/image 2-1.png'),
(3, 'Динс Velvet Yellow', 'Диваны', 28490, 43, 43, 77, '/images/image 2-2.png'),
(4, 'Кускен Navy Blue', 'Диваны', 2300, 43, 43, 77, '/images/image 2-3.png'),
(5, 'Кускен Navy Blue', 'Диваны', 2300, 43, 43, 77, '/images/image 2-3.png'),
(6, 'Шерона Barhat Grey', 'Двухспальные кровати', 21990, 43, 43, 77, '/images/image 2-4.png'),
(7, 'Авиньон-1', 'Буфеты', 18990, 43, 43, 77, '/images/image 2-5.png'),
(8, 'Стелла Дуб Сонома', 'Комоды', 8990, 43, 43, 77, '/images/image 2-6.png'),
(9, 'Равенна-1 Light', 'Комоды', 14990, 43, 43, 77, '/images/image 2-7.png'),
(10, 'Бенфлит Grey', 'Журнальные столы', 7290, 43, 43, 77, '/images/image 2-8.png'),
(11, 'Тиффани Вудлайн Крем', 'Письменные столы', 10990, 43, 43, 77, '/images/image 2-9.png'),
(12, 'Валенсия Beige', 'Шкафы', 19990, 43, 43, 77, '/images/image 2-10.png'),
(13, 'Лайт-3-170-240 Белый', 'Шкафы', 27290, 43, 43, 77, '/images/image 2-11.png'),
(14, 'Вилли Pink', 'Детский диван', 21990, 43, 43, 77, '/images/image 2-12'),
(15, 'Сан-Паулу Velvet Brown', 'Барные стулья', 25990, 43, 43, 77, '/images/image 2-13'),
(16, 'Валенсия Beige', 'Барные стулья', 10990, 43, 43, 77, '/images/image 2-14'),
(17, 'Валенсия Beige', 'Барные стулья', 19990, 43, 43, 77, '/images/image 2-15'),
(18, 'Шерона Barhat Grey', 'Двухспальные кровати', 21990, 43, 43, 77, '/images/image 2-16'),
(19, 'Авиньон-1', 'Буфеты', 18990, 43, 43, 77, '/images/image 2-17'),
(20, 'Стелла Дуб Сонома', 'Комоды', 8990, 43, 43, 77, '/images/image 2-18'),
(21, 'Равенна-1 Light', 'Комоды', 14990, 43, 43, 77, '/images/image 2-19'),
(22, 'Бенфлит Grey', 'Журнальные столы', 7290, 43, 43, 77, '/images/image 2-20'),
(23, 'Тиффани Вудлайн Крем', 'Письменные столы', 10990, 43, 43, 77, '/images/image 2-21'),
(24, 'Валенсия Beige', 'Шкафы', 19990, 43, 43, 77, '/images/image 2-22'),
(25, 'Лайт-3-170-240 Белый', 'Шкафы', 27290, 43, 43, 77, '/images/image 2-23'),
(26, 'Вилли Pink', 'Детский диван', 21990, 43, 43, 77, '/images/image 2-24'),
(27, 'Сан-Паулу Velvet Brown', 'Барные стулья', 25990, 43, 43, 77, '/images/image 2-25'),
(28, 'Валенсия Beige', 'Барные стулья', 10990, 43, 43, 77, '/images/image 2-26'),
(29, 'Валенсия Beige', 'Барные стулья', 19990, 43, 43, 77, '/images/image 2-27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
