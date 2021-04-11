-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 11 2021 г., 20:38
-- Версия сервера: 5.6.43
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homestead`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appraisal` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `appraisal`, `text`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Liss', 10, 'user_name', 1, '2021-04-11 17:04:00', '2021-04-11 17:04:00'),
(2, 'Liss', 6, 'asdsaas asd asdas dasd', 1, '2021-04-11 17:05:45', '2021-04-11 17:05:45'),
(3, 'asdasdasd', 10, 'asdasdasd', 1, '2021-04-11 17:06:07', '2021-04-11 17:06:07');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appraisal` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `user_name`, `img`, `price`, `appraisal`, `created_at`, `updated_at`) VALUES
(1, 'perfect', 'Liss', 'https://kinogo.biz/uploads/posts/2020-03/thumbs/1585308608-488854774.jpg', '332', 8, '2021-04-01 09:05:07', '2021-04-11 17:06:07'),
(2, 'Георгий', 'asdasdasd', 'https://kinogo.biz/uploads/posts/2020-03/thumbs/1585308608-488854774.jpg', '12321', 0, '2021-04-11 16:13:52', '2021-04-11 16:13:52'),
(3, 'Георгий', 'asdasdasd', 'https://kinogo.biz/uploads/posts/2020-03/thumbs/1585308608-488854774.jpg', '123123', 0, '2021-04-11 16:33:00', '2021-04-11 16:33:00'),
(4, 'Георгий', 'asdasdasd', 'https://kinogo.biz/uploads/posts/2020-03/thumbs/1585308608-488854774.jpg', '123', 0, '2021-04-11 16:34:26', '2021-04-11 16:34:26'),
(5, 'jojo', 'asdasdasd', 'https://kinogo.biz/uploads/posts/2020-03/thumbs/1585308608-488854774.jpg', '123', 0, '2021-04-11 16:35:16', '2021-04-11 16:35:16'),
(6, 'jojo', 'asdasdasd', 'https://kinogo.biz/uploads/posts/2020-03/thumbs/1585308608-488854774.jpg', '123213', 0, '2021-04-11 16:35:40', '2021-04-11 16:35:40');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
