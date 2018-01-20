-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 20 2018 г., 21:36
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
(1, 'АгроБизнес', 'Новости агробизнеса Украины. Инвестиции в агросектор', ''),
(2, 'Агроэкспорт', 'Новости аграрного экспорта. Поставка продукции заграницу. Украинское зерно в Европе', ''),
(3, 'Пищевое производство', 'Пищевое производство Украины', ''),
(4, 'Законодательство', 'Законы о земле, законодательство Украины', '');

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
(2, 'На зерновом терминале Cargill начался монтаж силосных башен', '1', 'На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка силосных башен для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.', '1515696393', 'new.jpg', NULL, NULL, NULL),
(3, 'На зерновом терминале Cargill начался монтаж силосных башен', '1', 'На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка силосных башен для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.', '1515696393', 'new.jpg', NULL, NULL, NULL),
(4, 'На зерновом терминале Cargill начался монтаж силосных башен', '2', 'На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка силосных башен для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.', '1515696093', 'new.jpg', NULL, NULL, NULL),
(5, 'Украина за 2017 г. экспортировала 599 тыс. т сахара', '2', 'Украина за 2017 г. экспортировала 599,34 тыс. т сахара (УКТВЭД 1701) на сумму $280,13 млн. Об этом свидетельствуют данные ГФС.', '1515696093', 'new.jpg', NULL, NULL, NULL),
(6, 'Молочный альянс осуществил первые поставки сыров в ОАЭ и США', '3', 'Группа компаний «Молочный альянс» начала экспортные поставки твердых, плавленых и мягких сыров в Объединенные Арабские Эмираты (ОАЭ) и Соединенные Штаты Америки (США). Первые отгрузки сыров состоялись в конце 2017 г.', '1515696093', 'new.jpg', NULL, NULL, NULL),
(7, 'Правительство сняло ограничения на получение земли участниками АТО', '4', 'Кабинет Министров пересмотрел и конкретизировал стратегию государства в части выделения земельных участков участникам АТО, обеспечив максимально широкий доступ к получению этой льготы, пишет propozitsiya.com со ссылкой на пресс-службу ведомства.', '1515696093', 'new.jpg', NULL, NULL, NULL),
(8, 'Вагон-зерновоз отныне будет стоить 655 грн/сутки', '1', 'Правление «Укрзализныци» завершило процесс дерегуляции вагонной составляющей тарифа для парка собственных вагонов, утвердив процедуру определения платы за их использование. В полном объеме изменения вступят в силу с 19 февраля 2018 года', '1515696093', 'new.jpg', NULL, NULL, NULL),
(9, 'В Черкассах аграрии призвали депутатов поддержать законопроект, уменьшающий коррупцию в земельных отношениях', '4', 'В Черкассах завершилась акция протеста украинских аграриев, в результате которой была принята резолюция с призывом к депутатам Черкасского областного совета созвать внеочередную сессию и принять решение о необходимости поддержки законопроекта №7363 «О внесении изменений в Налоговый кодекс Украины и некоторые законодательные акты Украины относительно стимулирования создания и деятельности мелких фермерских хозяйств и деконцентрации полномочий в сфере земельных отношений»', '1515696093', 'new.jpg', NULL, NULL, NULL),
(10, 'В текущем сезоне Украина обеспечила 20% импорта пшеницы Индией', '2', 'В текущем сезоне Украина является топ-поставщиком пшеницы в Индию, сохраняя достигнутые в 2016/17 МГ позиции, с общим объемом продаж в 2,9 млн. тонн, что составило 49% общего объема закупок пшеницы данной страной', '1515696093', 'new.jpg', NULL, NULL, NULL);

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
  `cross_news` varchar(255) CHARACTER SET utf8 NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news_content`
--

INSERT INTO `news_content` (`id`, `new_id`, `text`, `img_1`, `img_2`, `img_3`, `cross_news`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '2', '<p>На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка башен силосов для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.</p>\r\n\r\n<p>«Купола двух будущих силосов уже собраны и готовы к подъему. Монтаж крыши силоса, в котором будет храниться зерно, самый трудоемкий процесс. Он занимает порядка 70% общего времени всего монтажа. Купола этих двух силосов собирали три недели. Далее крыши будут поднимать и наращивать кольцами – стенами бочкообразного склада. Каждая из конструкций весит около 150 т», — сообщила компания на странице в Facebook.</p>\r\n\r\n<p>Всего на терминале будут установлены 14 силосных башен для хранения зерна.</p>\r\n\r\n<p>Мощность единовременного хранения зерна на терминале составит 290 тыс. т. Комплекс будет оборудован 14 силосами по 15 тыс. т и складом напольного хранения на 80 тыс. т. Суточная мощность по приему и разгрузке зерна с железной дороги составит 9 тыс. т. Общая сумма инвестиций — $150 млн. Терминал обеспечит перевалку 10% зерновых, произведенных в Украине.</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(3, '3', '<p>На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка башен силосов для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.</p>\r\n\r\n<p>«Купола двух будущих силосов уже собраны и готовы к подъему. Монтаж крыши силоса, в котором будет храниться зерно, самый трудоемкий процесс. Он занимает порядка 70% общего времени всего монтажа. Купола этих двух силосов собирали три недели. Далее крыши будут поднимать и наращивать кольцами – стенами бочкообразного склада. Каждая из конструкций весит около 150 т», — сообщила компания на странице в Facebook.</p>\r\n\r\n<p>Всего на терминале будут установлены 14 силосных башен для хранения зерна.</p>\r\n\r\n<p>Мощность единовременного хранения зерна на терминале составит 290 тыс. т. Комплекс будет оборудован 14 силосами по 15 тыс. т и складом напольного хранения на 80 тыс. т. Суточная мощность по приему и разгрузке зерна с железной дороги составит 9 тыс. т. Общая сумма инвестиций — $150 млн. Терминал обеспечит перевалку 10% зерновых, произведенных в Украине.</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(4, '4', '<p>На строительстве зернового терминала глобального сырьевого трейдера Cargill в морском порту «Южный» началась сборка башен силосов для хранения зерна. Об этом сообщила компания «М.В. Карго», осуществляющая строительство терминала.</p>\r\n\r\n<p>«Купола двух будущих силосов уже собраны и готовы к подъему. Монтаж крыши силоса, в котором будет храниться зерно, самый трудоемкий процесс. Он занимает порядка 70% общего времени всего монтажа. Купола этих двух силосов собирали три недели. Далее крыши будут поднимать и наращивать кольцами – стенами бочкообразного склада. Каждая из конструкций весит около 150 т», — сообщила компания на странице в Facebook.</p>\r\n\r\n<p>Всего на терминале будут установлены 14 силосных башен для хранения зерна.</p>\r\n\r\n<p>Мощность единовременного хранения зерна на терминале составит 290 тыс. т. Комплекс будет оборудован 14 силосами по 15 тыс. т и складом напольного хранения на 80 тыс. т. Суточная мощность по приему и разгрузке зерна с железной дороги составит 9 тыс. т. Общая сумма инвестиций — $150 млн. Терминал обеспечит перевалку 10% зерновых, произведенных в Украине.</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(5, '5', '<p>Украина за 2017 г. экспортировала 599,34 тыс. т сахара (УКТВЭД 1701) на сумму $280,13 млн.</p>\r\n\r\n<p>Об этом свидетельствуют данные ГФС.</p>\r\n\r\n<p>Основными импортерами украинского сахара за отчетный период являются Шри-Ланка ($30,34 млн), Турция ($24,55 млн) и Ливия ($20,5 млн). Экспорт в эти страны составил 64,91 тыс. т, 52,5 тыс. т и 43,15 тыс. т сахара соответственно.</p>\r\n\r\n<p>Напомним, что в Украине с начала 2017/18 МГ по состоянию на 16 января аграрии переработали 14,19 млн т сахарной свеклы. Объем производство сахара составил 2,04 млн т.</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(6, '6', '<p>Группа компаний «Молочный альянс» начала экспортные поставки твердых, плавленых и мягких сыров в Объединенные Арабские Эмираты (ОАЭ) и Соединенные Штаты Америки (США). Первые отгрузки сыров состоялись в конце 2017 г.</p>\r\n\r\n<p>Об этом сообщает пресс-служба ГК «Молочный Альянс».</p>\r\n\r\n<p><i>«Плавленые сыры «Шоколадный», «Медовый» и «Янтарь», изготовленные на Баштанском сырзаводе, были отправлены в ноябре 2017 г. в ОАЭ под ТМ Family Harvest, а накануне Нового года мы экспортировали мягкий сыр «Провволлоне» и «Провволлоне копченый». Переговоры относительно поставок нашей продукции в арабские страны продолжались около 9 месяцев. В настоящее время нами уже подписан долгосрочный контракт. В дальнейшем мы планируем расширять ассортимент продукции для экспорта и надеемся на длительное и плодотворное сотрудничество», — подчеркнула коммерческий директор ГК «Молочный альянс» Виктория Предборская.</i></p>\r\n\r\n<p>Также ГК «Молочный альянс» было налажено сотрудничество и с американскими партнерами. Так, в 2017 г. состоялись две отгрузки в США твердых и плавленых сыров производства «Пирятинского сырзавода». В частности, было экспортировано 11 наименований сыров.</p>\r\n\r\n<p>Напомним, в июне ГК «Молочный альянс» осуществила первую поставку молочной продукции ТМ «Яготинское», «Яготинское для детей» и «Славия» в сети грузинских и азербайджанских магазинов «Украинские продукты».</p>\r\n\r\n<p>Ранее сообщалось, что «Яготинский маслозавод» опровергает информацию о несоответствующем качестве молока.</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(7, '7', '<p>Кабинет Министров пересмотрел и конкретизировал стратегию государства в части выделения земельных участков участникам АТО, обеспечив максимально широкий доступ к получению этой льготы, пишет propozitsiya.com со ссылкой на пресс-службу ведомства.</p>\r\n\r\n<p>Постановлением «О внесении изменений в Стратегию совершенствования механизма управления в сфере использования и охраны земель сельскохозяйственного назначения государственной собственности и распоряжение ими» закрепляется первоочередность обеспечения земельными участками участников антитеррористической операции независимо от площади земельных участков, права аренды на которые были проданы.</p>\r\n\r\n<p>Постановление вступит в силу после его опубликования. Сейчас же бесплатно может быть передано не более 25% от площади участков, реализованных на открытых торгах.</p>\r\n\r\n<p>По словам первого заместителя Министра аграрной политики и продовольствия Максима Мартынюка, принятие постановления 413 имело побочный эффект, хотя и было направлено на перекрытия сомнительных схем распоряжение государственными землями.</p>\r\n\r\n<p>«Побочным эффектом стало замедление темпов передачи земли участникам АТО. Поэтому во время встреч с организациями ветеранов АТО мы нашли тот формат, который бы их устраивал, - внесение изменений в это постановление, которые ускорили передачу земли», - пояснил он.</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(8, '8', '<p>Правление «Укрзализныци» завершило процесс дерегуляции вагонной составляющей тарифа для парка собственных вагонов, утвердив процедуру определения платы за их использование. В полном объеме изменения вступят в силу с 19 февраля 2018 года. Об этом пишет propozitsiya.com со ссылкой на пресс-службу «Укрзализныци».</p>\r\n\r\n<p>До сих пор цена на услуги перевозки была значительно ниже той, которую платят реальные грузоотправители, поскольку устанавливалась государством. Поэтому компания недополучала доходы.</p>\r\n\r\n<p>«Принятые сегодня решения, в первую очередь, позволят увеличить поступления средств на развитие компании. Мы рассчитываем также, что такой шаг сделает невозможным коррупционные схемы в этом сегменте, в том числе, со стороны наших сотрудников», - прокомментировал и.о. председателя правления «Укрзализныця» Евгений Кравцов.</p>\r\n\r\n<p>«Мы ожидаем ликвидации искусственного дефицита вагонов и снижения стоимости перевозки для конечного потребителя за счет выравнивания соотношения спроса и предложения вагонов на рынке», - отметил руководитель «Укрзализныци».</p>\r\n\r\n<p>Разница между фиксированной и рыночной стоимостью вагонов попадала к компаниям-посредникам или провоцировала коррупционные схемы внутри «Укрзализныци». По оценкам экспертов, объем этого специфического рынка может составлять до 5-ти млдр грн. в год.</p>\r\n\r\n<p>Дерегуляция вагонной составляющей будет внедряться в два этапа. На первом будет применяться формульный расчет ежедневной оплаты за совершение услуги перевозки в вагонах «Укрзализныци». Он базируется на 4 составляющих: стоимость нового вагона на рынке, стоимость ремонтов в течение срока эксплуатации вагона конкретного типа, рентабельность на уровне около 10% и дисконтирования денежных потоков во времени.\r\nНа втором этапе внедряется система ежедневных электронных торгов в сотрудничестве с командой «Prozorro. Продажи», на которых будет выставляться часть пустого парка. По их результатам будет определяться цена для всего парка вагонов по видам на определенную дату.</p>\r\n\r\n<p>В компании заявили, что такая прозрачность механизма и построение на понятных участникам рынка началах окупаемости и восстанавливаемости основных средств дает возможность каждому контролировать аргументированность изменений цены. Это позволит получить в течение жизненного цикла вагона средства, которых будет достаточно для замещения его новым вагоном после полного износа</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(9, '9', '<p>В Черкассах завершилась акция протеста украинских аграриев, в результате которой была принята резолюция с призывом к депутатам Черкасского областного совета созвать внеочередную сессию и принять решение о необходимости поддержки законопроекта №7363 «О внесении изменений в Налоговый кодекс Украины и некоторые законодательные акты Украины относительно стимулирования создания и деятельности мелких фермерских хозяйств и деконцентрации полномочий в сфере земельных отношений». Об этом пишет propozitsiya.com со ссылкой на пресс-службу Всеукраинского Аграрного Совета.</p>\r\n\r\n<p>Данным законопроектом предлагается передать права по распоряжению землями государственной собственности, находящихся за пределами населенных пунктов и не представляющих важное значение для государства, объединенным территориальным общинам, тем самым лишив этих полномочий Госгеокадастр. Принятие данного документа будет способствовать дальнейшей децентрализации украинской экономики, стимулировать общины к объединению, повысит эффективность управления участками, уменьшит коррупционные риски в земельных отношениях.</p>\r\n\r\n<p>Митингующие отметили, что не собираются останавливаться, и в случае, если власть проигнорирует их законные требования, акции протеста будут продолжаться и распространятся на другие регионы.</p>\r\n\r\n<p>«В ближайшее время ожидаем внеочередное заседание депутатов областного совета. Если наши требования будут проигнорированы, мы будем двигаться в сторону столицы », - отметил заместитель председателя Всеукраинского Аграрного Совета Александр Слипченко</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL),
(10, '10', '<p>В текущем сезоне Украина является топ-поставщиком пшеницы в Индию, сохраняя достигнутые в 2016/17 МГ позиции, с общим объемом продаж в 2,9 млн. тонн, что составило 49% общего объема закупок пшеницы данной страной. Об этом пишет propozitsiya.com со ссылкой на «АПК-Информ».</p>\r\n\r\n<p>Согласно январским оценкам USDA, по итогам 2017/18 МГ объем импорта пшеницы Индией составит 2,5 млн. тонн. В сравнении с показателями предыдущего сезона это в 2,4 раза меньше (5,9 млн. тонн). Причиной является увеличение внутреннего зернового производства (на 13%), а также повышением импортной пошлины (до 20%).</p>\r\n\r\n<p>По итогам первой половины текущего сезона Индия находится на 8 позиции в списке импортеров украинской пшеницы с объем закупок немногим более 500 тыс. тонн. За прогнозами это составит 20% от общего импорта в эту страну по итогам сезона.</p>\r\n\r\n<p>Аналитики агентства также прогнозируют, что во второй половине сезона поставки украинской пшеницы в Индию будут планомерно сокращаться и носить ситуативный характер, а это окажет давление на цены в данном сегменте.</p>', 'lg-img.jpg', 'lg-img.jpg', 'lg-img.jpg', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `news_meta`
--

CREATE TABLE `news_meta` (
  `id` int(11) NOT NULL,
  `new_id` int(11) NOT NULL,
  `new_title` varchar(500) NOT NULL,
  `new_desc` varchar(500) NOT NULL,
  `new_key` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_meta`
--

INSERT INTO `news_meta` (`id`, `new_id`, `new_title`, `new_desc`, `new_key`) VALUES
(3, 2, '2 title', '2 desc', 'new_key 2'),
(4, 3, '3 title', '3 desc', 'new_key 3'),
(5, 4, '4 title', '4 desc', 'new_key 4'),
(6, 5, '5 title', '5 desc', 'new_key 5'),
(7, 6, '6 title', '6 desc', 'new_key 6'),
(8, 7, '7 title', '7 desc', 'new_key 7'),
(9, 8, '8 title', '8 desc', 'new_key 8'),
(10, 9, '9 title', '9 desc', 'new_key 9'),
(11, 10, '10 title', '10 desc', 'new_key 10');

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
-- Индексы таблицы `news_meta`
--
ALTER TABLE `news_meta`
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
  MODIFY `new_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `news_content`
--
ALTER TABLE `news_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `news_meta`
--
ALTER TABLE `news_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
