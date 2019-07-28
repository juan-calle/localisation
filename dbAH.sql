-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2016 at 11:10 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbAH`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `language_id` char(2) NOT NULL,
  `language_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`language_id`, `language_name`) VALUES
('bg', 'bulgarian'),
('en', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `news_translation`
--

CREATE TABLE `news_translation` (
  `news_id` int(11) NOT NULL,
  `language_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `news_translation_id` int(11) NOT NULL,
  `news_title` text COLLATE utf8_unicode_ci NOT NULL,
  `news_summary` text COLLATE utf8_unicode_ci NOT NULL,
  `news_picture` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_translation`
--

INSERT INTO `news_translation` (`news_id`, `language_id`, `news_translation_id`, `news_title`, `news_summary`, `news_picture`) VALUES
(1, 'bg', 0, '<h2><a href=''tools/errorManager''>Allen & Heath QU и GLD управлява посещението на патриарх Кирил на Москва и цяла Русия</a></h2>', '<p>MixArt наскоро условие доброто управление в продължение на две събития в южната част на Русия по време на посещението на патриарх Кирил на Москва и на цяла Русия. MixArt проектирани и разположени две звукови системи за използване в църквата на Stanitsa &hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_0_bg.jpg'),
(1, 'en', 0, '<h2><a href=''tools/errorManager''>Allen & Heath''s QU and GLD manage visit of patriarch Kirill of Moscow and all Russia</a></h2>', '<p>MixArt recently provided sound management for two events in the southern region of Russia during a visit of Patriarch Kirill of Moscow and All Russia. MixArt designed and deployed two sound systems for use in the church of Stanitsa &hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_0_en.jpg'),
(2, 'en', 1, '<h2><a href="tools/errorManager">Allen & Heath adds two new models to the ZEDi RANGE</a></h2>', '<p>Following the recent launch of the ZEDi-8 hybrid mixer / interface, Allen &amp; Heath has released two more ZEDi models, the ZEDi-10 and ZEDi-10FX, from its acclaimed ZED analogue console range. &nbsp; Designed for recording/gigging artists and AV rental and &hellip; <a href="tools/errorManager">Continue</a></p>', 'public/assets/img/news/news_1_en.jpg'),
(3, 'bg', 1, '<h2><a href="tools/errorManager">Allen & Heath добавя два нови модела към гамата ZEDi</a></h2>', '<p>След скорошното стартиране на ZEDi-8 хибриден миксер / интерфейс, Allen &amp; Heath пусна още два модела ZEDi, на ZEDi-10 и ZEDi-10FX, от своя аплодирана ZED аналог конзола диапазон. Проектиран за запис / gigging художници и AV под наем и &hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_1_bg.jpg'),
(4, 'en', 2, '<h2><a href=''tools/errorManager''>dLIVE on european tour with Backyard Babies</a></h2>', '<p>Swedish rock band, Backyard Babies, is currently on a tour of Europe with Allen &amp; Heath’s new dLive digital mixing system. &nbsp; “I have been a loyal iLive user for the past 4 years, and have done about 500 shows,&hellip; &hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_2_en.jpg'),
(5, 'bg', 2, '<h2><a href=''tools/errorManager''>dLIVE за Европейския турне с Backyard Babies</a></h2>', '<p>Шведската рок банда, Backyard Babies, в момента е на турне в Европа с Allen & Heath ново iLive цифрова система за смесване. "Аз съм бил лоялен iLive потребител за последните 4 години, и са направили около 500 представления<a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_2_bg.jpg'),
(6, 'en', 3, '<a href=''tools/errorManager''><h2>QU-16 Provides wireless control for Chengdu Lounge Bar</a></h2>', '<p>Allen &amp; Heath’s Qu-16 digital mixer was recently installed in Run Li Xin Private Lounge in Chengdu, Sichuan, China. &nbsp; Supplied by EZPro’s Chengdu branch, the exclusive lounge has a very advanced sound and lighting system, including EAW speakers and&hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_3_en.jpg'),
(7, 'bg', 3, '<h2><a href=''tools/errorManager''>QU-16 Осигурява безжично управление за Ченду Lounge Bar</a></h2>', '<p>Allen & Heath Чу-16 цифров миксер наскоро беше инсталирана в Run Li Xin Private Lounge в Ченду, Съчуан, Китай. Доставен чрез клон EZPro Chengdu, изключителната салона има много напреднал озвучителна и осветителна система, включително ЕЗА говорители и&hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_3_bg.jpg'),
(8, 'en', 4, '<h2><a href=''tools/errorManager''>dLive at Mumbai''s Hard Rock Café</a></h2>', '<p>Allen & Heath’s dLive has been used in Mumbai’s renowned Hard Rock Café. Sun Infonet, distributor of Allen & Heath products in India, selected the flagship DM64 MixRack with an S7000 Control Surface. The first artist to use the new&hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_4_en.jpg'),
(9, 'bg', 4, '<h2><a href=''tools/errorManager''>dLive в Hard Rock Café Мумбай\r\n</a></h2>', '<p>Allen & Heath е dLive е била използвана в известния Hard Rock Café на Мумбай. Sun Infonet, дистрибутор на Allen & Heath продукти в Индия, избран флагмана DM64 MixtRack с S7000 Control Surface. Първият художник, за да използвате новите\r\n&hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_4_bg.jpg'),
(10, 'en', 5, '<h2><a href=''tools/errorManager''>dLive manages Brazilian Gospel Music Festival</a></h2>', '<p>Allen & Heath’s new dLive mixing system managed FOH, monitors and broadcast for a 30,000 capacity festival held in Sao Paulo, Brazil. Hosted by Brazil’s largest television network, TV Globo, Festival Promessas is an annual gospel music event. This&hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_5_en.jpg'),
(11, 'bg', 5, '<h2><a href=''tools/errorManager''>dLive управлява бразилския Gospel Music Festival</a></h2>', '<p>Allen & Heath ново dLive смесваща система успя FOH, монитори и предаването за фестивала на 30 000 капацитет проведе в Сао Пауло, Бразилия. Предоставен от най-голямата телевизионна мрежа на Бразилия, TV Globo, Festival Promessas е ежегодно събитие, госпъл музика. това&hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_5_bg.jpg'),
(12, 'en', 6, '<h2><a href=''tools/errorManager''>First dLive installed in Swedish Cirkus Theatre</a></h2>', '<p>The Cirkus Arena in Stockholm, Sweden, has become the first venue to install Allen & Heath’s new dLive digital mixing system. Originally established as a circus in the 19th Century, today Cirkus is one of Stockholm’s key entertainment venues,&hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_6_en.jpg'),
(13, 'bg', 6, '<h2><a href=''tools/errorManager''>Първо инсталираното устройство на шведски Cirkus</a></h2>', '<p>The Cirkus Арена в Стокхолм, Швеция, се превърна в първата място, за да инсталирате Allen & Heath ново живо цифрова система за смесване. Първоначално създаден като един цирк през 19-ти век, днес Cirkus е един от ключовите места за забавление на Стокхолм&hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_6_bg.jpg'),
(14, 'en', 7, '<h2><a href=''tools/errorManager''>Allen & Heath names Algam as exclusive distributor in France  </a></h2>', '<p>Allen & Heath is pleased to announce Algam as the new exclusive distributor of its products in the French market. Algam is a leading distributor of MI and professional audio, video and lighting products in France and the Benelux &hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_7_en.jpg'),
(15, 'bg', 7, '<h2><a href=''tools/errorManager''>Allen & Heath имена NAT Ltd като ексклузивен дистрибутор в България\r\n</a></h2>', '<p>Allen & Heath има удоволствието да съобщи NAT Ltd като новият ексклузивен дистрибутор на продуктите си на българския пазар. NAT Ltd е водещ дистрибутор на МВР и професионална аудио, видео и осветление продукти във Франция и страните от Бенелюкс.\r\n&hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_7_bg.jpg'),
(16, 'en', 8, '<h2><a href=''tools/errorManager''>ZEDS Fly high in flight simulators worldwide</a></h2>', '<p>Pacific Simulators, a flight simulator design and manufacturing company based in Christchurch, New Zealand, has adopted Allen &amp; Heath’s compact ZED-10 and ZED-14 analogue mixers as standard in its products. As part of the company’s ongoing research and development, it&hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_8_en.jpg'),
(17, 'bg', 8, '<h2><a href=''tools/errorManager''>ZEDS лети високо в полетни симулатори в света</a></h2>', '<p>Тихоокеанските Симулатори, симулатор на полет конструкторска компания, базирана в Крайстчърч, Нова Зеландия, е приела Allen & усилвател; Heath компактни ZED-10 и ZED-14 аналогови миксери като стандарт в своите продукти. Като част от дружеството текущо изследване и развитие, тя&hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_8_bg.jpg'),
(18, 'en', 9, '<h2><a href=''tools/errorManager''>Sun Infonet conducts dLive seminars</a></h2>', '<p>Allen & Heath’s Indian distributor, Sun Infonet, presented the new dLive digital series to its network of sound professionals at a seminar hosted at three different locations across India: Delhi, Ahmedabad and Mumbai. The objective of these seminars was&hellip; <a href=''tools/errorManager''>Continue</a></p>', 'public/assets/img/news/news_9_en.jpg'),
(19, 'bg', 9, '<h2><a href=''tools/errorManager''>Sun Infonet провежда семинари на живо\r\n</a></h2>', '<p>Allen & Heath на Индийския дистрибутор, Sun Infonet, представи новия dLive цифрова серия на своята мрежа от звукови специалисти на семинар бе домакин на три различни места в Индия: Делхи, Ахмедабад и Мумбай. Целта на тези семинари беше&hellip; <a href="tools/errorManager">Продължи</a></p>', 'public/assets/img/news/news_9_bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages_translation`
--

CREATE TABLE `pages_translation` (
  `pages_id` int(11) NOT NULL,
  `language_id` char(2) NOT NULL,
  `pages_translation_id` int(11) NOT NULL,
  `page_title` varchar(45) NOT NULL,
  `page_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages_translation`
--

INSERT INTO `pages_translation` (`pages_id`, `language_id`, `pages_translation_id`, `page_title`, `page_content`) VALUES
(0, 'bg', 0, 'Начало', NULL),
(0, 'en', 0, 'Home', NULL),
(1, 'en', 1, 'Products', NULL),
(2, 'bg', 1, 'Продукти', ''),
(3, 'en', 2, 'Solutions', '<p>From music bars to stadium tours and from project studios to corporate boardrooms, there are Allen & Heath mixers delivering great sound around the world in just about every scenario imaginable. We hope these pages will inspire you to look deeper into our extensive range to find the perfect solution for your next audio mixing challenge.</p>'),
(4, 'bg', 2, 'Решениея', '<p>От музикални барове до стадион екскурзии и от студия в проекта на корпоративни заседателни зали, има Allen & Heath смесители, предоставящи чудесен звук по целия свят в почти всеки сценарий можем да си представим. Надяваме се, че тези страници ще ви вдъхнови да погледнем по-дълбоко в нашата широка гама, за да откриете идеалното решение за следващия си аудио смесване предизвикателство.</p>'),
(5, 'en', 3, 'Where to Buy', NULL),
(6, 'bg', 3, 'Къде да купя', NULL),
(7, 'en', 4, 'Downloads', '<p>Download documents such as brochures and user guides as well as software, firmware and drivers for all products.</p> 						<p>Select a product series:</p>'),
(8, 'bg', 4, 'Изтегляния', '<p>Изтегли документи като брошури и ръководства за потребителя, както и софтуер, фърмуер и драйвери за всички продукти.\r\n</p> \r\n<p>Изберете продуктова серия:</p>'),
(9, 'en', 5, 'Support', NULL),
(10, 'bg', 5, 'Подкрепа', NULL),
(11, 'en', 6, 'Company', '<h3>ALLEN &amp; HEATH &#8211; WORLD CLASS MIXING</h3>     							<p>Allen &amp; Heath is a leading designer and manufacturer of mixing desks for live sound, permanent installation, DJs, broadcast and recording studios. Allen &amp; Heath Limited was acquired by Electra Partners in 2013.</p>     							<p><strong>Company Address:</strong><br />     							Allen &amp; Heath Limited<br />     							Kernick Industrial Estate<br />     							Penryn<br />     							Cornwall<br />     							TR10 9LU<br />     							United Kingdom</p>     							<p><strong>Tel: </strong>+44 (0)1326 372070</p>     							<p><strong>Company registration number:</strong> 4163451</p>     							<p>Registered in England and Wales</p>'),
(12, 'bg', 6, 'Компания', '<h3>ALLEN &amp; HEATH &#8211; СВЕТОВНА КПАСА СМЕСВАНЕ</h3>     							<p>Allen &amp; Heath е водещ дизайнер и производител на смесване бюра за жив звук, постоянен монтаж, диджеи, излъчване и звукозаписни студия. Allen &amp; Heath ограничен бе придобита от Electra Partners през 2013.</p>     							<p><strong>Адрес на фирмата:</strong><br />     							Allen &amp; Heath Limited<br />     							Kernick Industrial Estate<br />     							Penryn<br />     							Cornwall<br />     							TR10 9LU<br />     							United Kingdom</p>     							<p><strong>Tel: </strong>+44 (0)1326 372070</p>     							<p><strong>Регистрационен номер на компанията:</strong> 4163451</p>     							<p>Регистрация в Англия и Уелс</p>'),
(13, 'en', 7, 'News & Events', NULL),
(14, 'bg', 7, 'Новини и събития', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `series_translation`
--

CREATE TABLE `series_translation` (
  `series_id` int(11) NOT NULL,
  `language_id` char(2) NOT NULL,
  `series_translation_id` int(11) NOT NULL,
  `series_title` varchar(60) NOT NULL,
  `series_description` text,
  `series_picture` varchar(85) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series_translation`
--

INSERT INTO `series_translation` (`series_id`, `language_id`, `series_translation_id`, `series_title`, `series_description`, `series_picture`) VALUES
(0, 'en', 1, 'GLD Series', '<p>Digital mixing system for live touring, rental, houses of worship and installation</p>', 'public/assets/img/products/series/PPB_0.jpg'),
(1, 'bg', 1, 'GLD Cерия', '<p>Digital смесване система за жива турнета, наем, храмове и монтаж</p>', 'public/assets/img/products/series/PPB_0.jpg'),
(2, 'en', 2, 'DLive', '<p>The ultimate digital mixing system, with all the tools and features to excel in the most challenging and prestigious live sound environments.</p>', 'public/assets/img/products/series/PPB_1.jpg'),
(3, 'bg', 2, 'DLive', '<p>Крайната цифрова система за смесване, с всички инструменти и функции, за да се отличат в най-трудните и престижни живи звукови среди.</p>', 'public/assets/img/products/series/PPB_1.jpg'),
(4, 'en', 3, 'QU Series', '<p>Compact digital mixers for live, studio and installation</p>', 'public/assets/img/products/series/PPB_2.jpg'),
(5, 'bg', 3, 'QU Cерия', '<p>Компактни цифрови миксери за живо, студио и монтаж</p>', 'public/assets/img/products/series/PPB_2.jpg'),
(6, 'en', 4, 'iLive Series', '<p>Mix n’ match digital mixing system for live touring, rental, houses of worship and installation</p>', 'public/assets/img/products/series/PPB_3.jpg'),
(7, 'bg', 4, 'iLive Cерия', '<p>Разбърква се и се мач цифрова система за смесване на живо турнета, наем, храмове и монтаж</p>', 'public/assets/img/products/series/PPB_3.jpg'),
(8, 'en', 5, 'Xone Series', '<p>Professional DJ and club mixers, controllers and headphones</p>', 'public/assets/img/products/series/PPB_4.jpg'),
(9, 'bg', 5, 'Xone Cерия', '<p>Професионален DJ и клубни смесители, контролери и слушалки</p>', 'public/assets/img/products/series/PPB_4.jpg'),
(10, 'en', 6, 'ZED Series', '<p>All-purpose analogue mixers for bands, rental companies, singer songwriters and studio artists</p>', 'public/assets/img/products/series/PPB_5.jpg'),
(11, 'bg', 6, 'ZED Cерия', '<p>Всички аналогови цел смесители за ленти, фирми за отдаване под наем, певец композитори и артисти студийни</p>', 'public/assets/img/products/series/PPB_5.jpg'),
(12, 'en', 7, 'MixWizard4 Series', '<p>Rugged, rack mountable, all-purpose analogue mixers</p>', 'public/assets/img/products/series/PPB_6.jpg'),
(13, 'bg', 7, 'MixWizard4 Cерия', '<p>Здрав, зъбни монтира, универсални аналогови миксери</p>', 'public/assets/img/products/series/PPB_6.jpg'),
(14, 'en', 8, 'ME Series', '<p>Personal mixing system compatible with dLive, iLive, GLD, Qu and 3rd party digital mixers</p>', 'public/assets/img/products/series/PPB_7.jpg'),
(15, 'bg', 8, 'ME Cерия', '<p>Персонална система за смесване съвместима с iLive, iLive, GLD, Чу и дигитални смесители трети лица</p>', 'public/assets/img/products/series/PPB_7.jpg'),
(16, 'en', 9, 'GS Series', '<p>Analogue studio console / Multi-channel interface / DAW control surface</p>', 'public/assets/img/products/series/PPB_8.jpg'),
(17, 'bg', 9, 'GS Cерия', '<p>Analogue студио конзола / Многоканален интерфейс / контрол DAW повърхност</p>', 'public/assets/img/products/series/PPB_8.jpg'),
(18, 'en', 10, 'IDR Series', '<p>16x16 matrix mixers for fixed installation</p>', 'public/assets/img/products/series/PPB_9.jpg'),
(19, 'bg', 10, 'IDR Cерия', '<p>16x16 матрични смесители за неподвижно полагане</p>', 'public/assets/img/products/series/PPB_9.jpg'),
(20, 'en', 11, 'GL Series', '<p>Dual function FoH / monitor mixers for live sound and houses of worship</p>', 'public/assets/img/products/series/PPB_10.jpg'),
(21, 'bg', 11, 'GL Cерия', '<p>Dual функционални FOH / монитор смесители за жив звук и храмове</p>', 'public/assets/img/products/series/PPB_10.jpg'),
(22, 'en', 12, 'ICE Series', '<p>16ch multi-track recorders and USB/FireWire interfaces</p>', 'public/assets/img/products/series/PPB_11.jpg'),
(23, 'bg', 12, 'ICE Cерия', '<p>16ch мултитрак записващи устройства и USB / FireWire интерфейси</p>', 'public/assets/img/products/series/PPB_11.jpg'),
(24, 'en', 13, 'PA Series', '<p>Powered and unpowered analogue live mixers</p>', 'public/assets/img/products/series/PPB_12.jpg'),
(25, 'bg', 13, 'PA Cерия', '<p>Powered и незахранено аналогови живи смесители</p>', 'public/assets/img/products/series/PPB_12.jpg'),
(26, 'en', 14, 'XB Series', '<p>Compact, affordable broadcast mixers</p>', 'public/assets/img/products/series/PPB_13.jpg'),
(27, 'bg', 14, 'XB Cерия', '<p>Компактни, достъпни за излъчване смесители</p>', 'public/assets/img/products/series/PPB_13.jpg'),
(28, 'en', 15, 'GR Series', '<p>Analogue zone mixers for installation applications such as paging and background music</p>', 'public/assets/img/products/series/PPB_14.jpg'),
(29, 'bg', 15, 'GR Cерия', '<p>Analogue зона смесители за приложения за инсталиране като пейджинг и фонова музика</p>', 'public/assets/img/products/series/PPB_14.jpg'),
(30, 'en', 16, 'Discontinued', '<p>Out of production mixers from our 40+ year back catalogue</p>', 'public/assets/img/products/series/PPB_15.jpg'),
(31, 'bg', 16, 'Спрени', '<p>Извън производствените миксери от нашия 40+ години назад стоките</p>', 'public/assets/img/products/series/PPB_15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `news_translation`
--
ALTER TABLE `news_translation`
  ADD PRIMARY KEY (`news_id`,`language_id`) USING BTREE,
  ADD KEY `FK_language_id_news` (`language_id`);

--
-- Indexes for table `pages_translation`
--
ALTER TABLE `pages_translation`
  ADD PRIMARY KEY (`pages_id`,`language_id`),
  ADD KEY `FK_language_id_pages` (`language_id`);

--
-- Indexes for table `series_translation`
--
ALTER TABLE `series_translation`
  ADD PRIMARY KEY (`series_id`,`language_id`),
  ADD KEY `FK_language_id_series` (`language_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_translation`
--
ALTER TABLE `news_translation`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `series_translation`
--
ALTER TABLE `series_translation`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages_translation`
--
ALTER TABLE `pages_translation`
  ADD CONSTRAINT `FK_language_id_pages` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `series_translation`
--
ALTER TABLE `series_translation`
  ADD CONSTRAINT `FK_language_id` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
