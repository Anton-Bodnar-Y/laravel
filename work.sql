-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 18 2018 г., 22:39
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `work`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `wwewewe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `category_desc`, `wwewewe`) VALUES
(1, 'cat 1', 'category 1', ''),
(2, 'cat 2', 'category 2', ''),
(3, 'cat 3', 'category 3', ''),
(4, 'cat 4', 'category 4', '');

-- --------------------------------------------------------

--
-- Структура таблицы `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(10) UNSIGNED NOT NULL,
  `forum_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `forum`
--

INSERT INTO `forum` (`forum_id`, `forum_title`, `date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'forum_title 1', 'date 1', NULL, NULL, NULL),
(2, 'forum_title 2', 'date 2', NULL, NULL, NULL),
(3, 'forum_title 3', 'date 3', NULL, NULL, NULL),
(4, 'forum_title 4', 'date 4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_01_05_204620_create_news_table', 2),
('2018_01_05_220019_create_forum_table', 2),
('2018_01_09_184529_create_newscontect_table', 2),
('2018_01_11_193029_create_page_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `new_id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`new_id`, `news_title`, `category_id`, `short_desc`, `date`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'На зерновом терминале Cargill начался монтаж силосных башен', '1', 'На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка силосных башен для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.', '1515696393', 'sm-img.jpg', NULL, NULL, NULL),
(3, 'На зерновом терминале Cargill начался монтаж силосных башен', '1', 'На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка силосных башен для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.', '1515696393', 'sm-img.jpg', NULL, NULL, NULL),
(4, 'На зерновом терминале Cargill начался монтаж силосных башен', '2', 'На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка силосных башен для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.', '1515696093', 'sm-img.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `news_content`
--

CREATE TABLE `news_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `new_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `img_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news_content`
--

INSERT INTO `news_content` (`id`, `new_id`, `text`, `img_1`, `img_2`, `img_3`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '2', '<p>На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка башен силосов для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.</p>\r\n\r\n<p>«Купола двух будущих силосов уже собраны и готовы к подъему. Монтаж крыши силоса, в котором будет храниться зерно, самый трудоемкий процесс. Он занимает порядка 70% общего времени всего монтажа. Купола этих двух силосов собирали три недели. Далее крыши будут поднимать и наращивать кольцами – стенами бочкообразного склада. Каждая из конструкций весит около 150 т», — сообщила компания на странице в Facebook.</p>\r\n\r\n<p>Всего на терминале будут установлены 14 силосных башен для хранения зерна.</p>\r\n\r\n<p>Мощность единовременного хранения зерна на терминале составит 290 тыс. т. Комплекс будет оборудован 14 силосами по 15 тыс. т и складом напольного хранения на 80 тыс. т. Суточная мощность по приему и разгрузке зерна с железной дороги составит 9 тыс. т. Общая сумма инвестиций — $150 млн. Терминал обеспечит перевалку 10% зерновых, произведенных в Украине.</p>', 'img_1 2', 'img_2 2', 'img_3 2', NULL, NULL, NULL),
(3, '3', '<p>На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка башен силосов для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.</p>\r\n\r\n<p>«Купола двух будущих силосов уже собраны и готовы к подъему. Монтаж крыши силоса, в котором будет храниться зерно, самый трудоемкий процесс. Он занимает порядка 70% общего времени всего монтажа. Купола этих двух силосов собирали три недели. Далее крыши будут поднимать и наращивать кольцами – стенами бочкообразного склада. Каждая из конструкций весит около 150 т», — сообщила компания на странице в Facebook.</p>\r\n\r\n<p>Всего на терминале будут установлены 14 силосных башен для хранения зерна.</p>\r\n\r\n<p>Мощность единовременного хранения зерна на терминале составит 290 тыс. т. Комплекс будет оборудован 14 силосами по 15 тыс. т и складом напольного хранения на 80 тыс. т. Суточная мощность по приему и разгрузке зерна с железной дороги составит 9 тыс. т. Общая сумма инвестиций — $150 млн. Терминал обеспечит перевалку 10% зерновых, произведенных в Украине.</p>', 'img_1 3', 'img_2 3', 'img_3 3', NULL, NULL, NULL),
(4, '4', '<p>На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка башен силосов для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.</p>\r\n\r\n<p>«Купола двух будущих силосов уже собраны и готовы к подъему. Монтаж крыши силоса, в котором будет храниться зерно, самый трудоемкий процесс. Он занимает порядка 70% общего времени всего монтажа. Купола этих двух силосов собирали три недели. Далее крыши будут поднимать и наращивать кольцами – стенами бочкообразного склада. Каждая из конструкций весит около 150 т», — сообщила компания на странице в Facebook.</p>\r\n\r\n<p>Всего на терминале будут установлены 14 силосных башен для хранения зерна.</p>\r\n\r\n<p>Мощность единовременного хранения зерна на терминале составит 290 тыс. т. Комплекс будет оборудован 14 силосами по 15 тыс. т и складом напольного хранения на 80 тыс. т. Суточная мощность по приему и разгрузке зерна с железной дороги составит 9 тыс. т. Общая сумма инвестиций — $150 млн. Терминал обеспечит перевалку 10% зерновых, произведенных в Украине.</p>', 'img_1 4', 'img_2 4', 'img_3 4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'О нас', 'текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы ', 'sm-img.jpg', NULL, NULL, NULL),
(2, 'Контакты', 'текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы ', 'sm-img.jpg', NULL, NULL, NULL),
(3, 'Сотрудничество', 'текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы ', 'sm-img.jpg', NULL, NULL, NULL),
(4, 'Фермерским хозяйствам', 'текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы текст этой страницы ', 'sm-img.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `page_meta`
--

CREATE TABLE `page_meta` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page_meta`
--

INSERT INTO `page_meta` (`id`, `page_id`, `meta_title`, `meta_desc`, `meta_keyword`) VALUES
(1, 1, 'meta_title 1', 'meta_desc 1', 'meta_keyword 1'),
(2, 2, 'meta_title 2', 'meta_desc 2', 'meta_keyword 2'),
(3, 3, 'meta_title 3', 'meta_desc 3', 'meta_keyword 3'),
(4, 4, 'meta_title 4', 'meta_desc 4', 'meta_keyword 4');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Индексы таблицы `news_content`
--
ALTER TABLE `news_content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page_meta`
--
ALTER TABLE `page_meta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `news_content`
--
ALTER TABLE `news_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `page_meta`
--
ALTER TABLE `page_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
