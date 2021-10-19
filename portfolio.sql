-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Eki 2021, 10:46:07
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `feride`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aboutme`
--

CREATE TABLE `aboutme` (
  `email` varchar(2222) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `abouttext` varchar(9999) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `aboutme`
--

INSERT INTO `aboutme` (`email`, `age`, `abouttext`, `image`, `tel`) VALUES
('info@feri.de', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'info-img.jpg', '88888888');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blogname` varchar(255) DEFAULT NULL,
  `blogdesc` varchar(255) DEFAULT NULL,
  `bimage` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `blogname`, `blogdesc`, `bimage`, `date`) VALUES
(1, 'Blog Adı #1', 'Blog açıklaması', 'post-1.jpg', '2021-10-16'),
(2, 'Blog Adı #1', 'Blog açıklaması', 'post-2.jpg', '2021-10-15'),
(3, 'Blog Adı #1', 'Blog açıklaması', 'post-3.jpg', '2021-10-15'),
(4, 'Blog Adı #1', 'Blog açıklaması', 'post-4.jpg', '2021-10-13'),
(5, 'Blog Adı #1', 'Blog açıklaması', 'post-5.jpg', '2021-10-16'),
(6, 'Blog Adı #1', 'Blog açıklaması', 'post-6.jpg', '2021-10-11'),
(7, 'Blog Adı #1', 'Blog açıklaması', 'VERANDA2.jpg', '2021-10-18');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `catname`) VALUES
(1, 'test1'),
(2, 'test2'),
(3, 'test3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `exp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `experience`
--

INSERT INTO `experience` (`id`, `name`, `exp`) VALUES
(2, 'Illustrator', '55'),
(3, 'Photoshop', '85'),
(4, 'Autocad', '50'),
(5, 'test', '68');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mainslider`
--

CREATE TABLE `mainslider` (
  `text1` varchar(10) NOT NULL,
  `text2` varchar(255) DEFAULT NULL,
  `text3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mainslider`
--

INSERT INTO `mainslider` (`text1`, `text2`, `text3`) VALUES
('Developer', 'Everything', 'What i want');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `myname`
--

CREATE TABLE `myname` (
  `myname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `myname`
--

INSERT INTO `myname` (`myname`) VALUES
('Feride');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitebackground`
--

CREATE TABLE `sitebackground` (
  `background` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitebackground`
--

INSERT INTO `sitebackground` (`background`) VALUES
('home.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitelogo`
--

CREATE TABLE `sitelogo` (
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitelogo`
--

INSERT INTO `sitelogo` (`logo`) VALUES
('img-kitzu-logo.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socialmedia`
--

CREATE TABLE `socialmedia` (
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `behance` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `socialmedia`
--

INSERT INTO `socialmedia` (`facebook`, `instagram`, `behance`) VALUES
('facebook.com', 'instagram.com', 'behance.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'adnan', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `visitorip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `visitors`
--

INSERT INTO `visitors` (`id`, `visitorip`) VALUES
(3, '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `catname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `works`
--

INSERT INTO `works` (`id`, `name`, `desc`, `image`, `catname`) VALUES
(1, 'TEST1', 'TESTT', 'item-1.jpg', 'test1'),
(2, 'test2', NULL, 'item-2.jpg', 'test2'),
(3, 'test3', 'test', 'item-3.jpg', 'test1'),
(4, 'test4', 'test', 'item-4.jpg', 'test2'),
(5, 'test5', NULL, 'item-5.jpg', 'test3'),
(6, 'test6', 'test', 'item-6.jpg', 'test3');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mainslider`
--
ALTER TABLE `mainslider`
  ADD PRIMARY KEY (`text1`) USING BTREE;

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
