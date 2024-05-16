-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2023 г., 12:15
-- Версия сервера: 10.3.13-MariaDB
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
-- База данных: `deproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `status_order` varchar(255) NOT NULL DEFAULT 'Новое'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `product_name`, `quantity`, `adress`, `status_order`) VALUES
(1, 2, 'tovar1', '10', 'Moscow', 'Заказ подтвержден'),
(2, 2, 'tovar3', '5', 'Moscow', 'Заказ отменен'),
(3, 3, 'tovar2', '5', 'Moscow', 'Заказ обаботан'),
(4, 3, 'tovar3', '10', 'Moscow', 'Заказ подтвержден'),
(5, 3, 'tovar3', '10', 'Moscow', 'Заказ подтвержден'),
(6, 6, 'tovar3', '5', 'Moscow', 'Заказ отменен'),
(7, 6, 'tovar2', '5', 'Moscow', 'Заказ подтвержден'),
(8, 6, 'tovar2', '10', 'Moscow', 'Заказ отменен'),
(9, 3, 'tovar3', '10', 'Moscow', 'Заказ подтвержден'),
(10, 7, 'tovar2', '5', 'Moscow', 'Новое'),
(11, 3, 'tovar2', '10', 'Moscow', 'Заказ отменен'),
(12, 9, 'tovar2', '10', 'Moscow', 'Заказ обаботан');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `phone_number`, `status`) VALUES
(1, 'admin', '$2y$10$Kf7iHtxcoI6FvxfbyFowduviLI5vdV1NtRpjfF5KZaPoDWjU/rCOW', 'admin@admin.ru', '000', 'admin'),
(2, 'user', '$2y$10$z7MkstEbCm9fpgoVfY6a4.wqT4Dy3zEAd11AbUiJNSuBb9VvGkzpm', 'user@user.ru', '111', 'user'),
(3, 'user1', '$2y$10$4M97EPLUbYiwOYMSMWKZHubzE/Jzsa4qs77XM690amyy089pi78dG', 'user1@use1.ru', '222', 'user'),
(4, 'user2', '$2y$10$7Ua5qTxZWrtSMrpQguHO9uYDjKS3RE4RV/1rnwb7Kc29KF7.S0p9e', 'user2@mail.ru', '88000000000', 'user'),
(5, 'user3', '$2y$10$Tv.4qqsHeuWFS1DLs5OIyOvWJUSq/N.kADoRZS0OCkp0LGfbJWBty', 'user3@mail.ru', '88000000000', 'user'),
(6, 'user4', '$2y$10$SyGtc/hl4phNbcggdwcutO3IJmF6rgVS4XorSsazWcJyHbhE8Vat2', 'user4@mail.ru', '89106668911', 'user'),
(7, 'user121', '$2y$10$HyeTjRoeUYFMOgc/p0JWq.LJNVK0M4dt5S.xV/PcNzm9zy8Jr6T1q', 'user121@mail.ru', '88005553535', 'user'),
(8, 'user11', '$2y$10$kvd/mb8f8biLSe6f6KkTK.15f4cUNtKZoC.ARf3xu6D5ohA2FJUK6', 'user11@mail.ru', '00000000000', 'user'),
(9, 'Asim', '$2y$10$C7KE48kJfna8Wi73vi4pTeGE8SRUO5/XbFf9/tbFrRop7Cn5CLS1S', 'asim@mail.ru', '88005555555', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
