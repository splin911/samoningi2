-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2017 at 08:16 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samoningai`
--

-- --------------------------------------------------------

--
-- Table structure for table `skelbimai`
--

DROP TABLE IF EXISTS `skelbimai`;
CREATE TABLE `skelbimai` (
  `id` int(6) UNSIGNED NOT NULL,
  `pavadinimas` varchar(30) NOT NULL,
  `data_` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `miestas` varchar(30) NOT NULL,
  `tipas` varchar(30) NOT NULL,
  `registracija` varchar(30) NOT NULL,
  `aprasymas` text CHARACTER SET ucs2 COLLATE ucs2_lithuanian_ci NOT NULL,
  `tinkamas_rodyti` varchar(30) DEFAULT 'netinkamas',
  `nuoroda` varchar(65000) NOT NULL,
  `unikalusID` varchar(30) NOT NULL,
  `laisvas1` varchar(30) NOT NULL,
  `laisvas2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skelbimai`
--

INSERT INTO `skelbimai` (`id`, `pavadinimas`, `data_`, `email`, `miestas`, `tipas`, `registracija`, `aprasymas`, `tinkamas_rodyti`, `nuoroda`, `unikalusID`, `laisvas1`, `laisvas2`) VALUES
(114, 'Pratimai akims', '2018-07-06', 'mail@mail.com', 'Vilnius', 'Med.  praktika, meditacija', 'BÅ«tina', 'Lektorius Robertas Karvauskas pasakoja: â€œâ€¦mes esam Å¡io organizmo lÄ…stelÄ—s, dalelÄ—s. Kiekviena lÄ…stelÄ— organizme yra gyva tik tam, kad ji duotÅ³ energijÄ…. Taigi, visa Visata, viskas kas yra, tai yra organizmas, kurio pagrindas yra MEILÄ–. Å ventraÅ¡Äiuose tai aiÅ¡kiai pasakyta â€“ Dievas yra MeilÄ—. Taigi, Å¡i Visata, gyvenimas, pasaulis, visuma tai yra MeilÄ—s organizmas, ir iÅ¡ mÅ«sÅ³ Å¡iam organizmui, kaip iÅ¡ lÄ…stelÄ—s, reikia bÅ«tent gyvybinÄ—s energijos. Ji duoda mums Å¾aliavÄ…, kad mes pagamintume tÄ… energijÄ…', '', 'https://mail.google.com/mail/u/0/#inbox', 'sam222', '', ''),
(115, 'Karklynas', '2019-02-05', 'samoningai@gmail.com', 'KlaipÄ—da', 'Paskaita', 'BÅ«tina', 'Pasak R. Karvausko, mums ir neprivaloma Å¾inoti, turime tiesiog jausti Å¡irdimi. ReikÄ—tÅ³ save pastatyti Ä¯ kito vietÄ… â€“ â€žÄ¯eitiâ€œ ir nuoÅ¡irdÅ¾iai pajausti jo emocijas bei bÅ«senÄ…, tada aiÅ¡kiai gausime atsakymÄ…, kÄ… Å¡iuo momentu galime duoti geriausio. Tai galioja ne tik su Å¾monÄ—mis, bet ir viskam, kas mus supa, netgi daiktams, nes jie taip pat turi energinÄ¯ laukÄ….', '', 'https://github.com/splin911/samoningi2', 'sam423', '', ''),
(116, 'Rungtynes', '2020-07-06', 'mail@mail.com', 'Vilniaus apskr.', 'Mokymai', 'BÅ«tina', 'DaÅ¾nai mes negirdime ir nesuprantame kitÅ³ Å¾moniÅ³ bei visko, kas mus supa, nes nesame pasiruoÅ¡Ä™ duoti. Ä®prastai mes galvojame kÄ… gauti, net duodami, tikimÄ—s tokio pat vertingo atlygio ar bent jau dÄ—kingumo, pagyrimo. Kuomet nustojame tikÄ—tis iÅ¡ kitÅ³ sau naudos, atveriame kelius besÄ…lyginÄ—s MeilÄ—s energijai. Kartais tereikia tik nuoÅ¡irdaus Å¡ypsnio, gero Å¾odÅ¾io ar apkabinimo, kad pasikeistÅ³ emocinis fonas ir kitas Å¾mogus priimtÅ³ teisingiausius sprendimus.', '', 'https://www.youtube.com/watch?v=P8dGh1iEmCY', 'sam456', '', ''),
(117, 'Masazai namuose', '2023-04-05', 'masazass@gmail.com', 'Kaunas', 'Stovykla, festivalis', 'NebÅ«tina', 'Kuomet nustojame tikÄ—tis iÅ¡ kitÅ³ sau naudos, atveriame kelius besÄ…lyginÄ—s MeilÄ—s energijai. Kartais tereikia tik nuoÅ¡irdaus Å¡ypsnio, gero Å¾odÅ¾io ar apkabinimo, kad pasikeistÅ³ emocinis fonas ir kitas Å¾mogus priimtÅ³ teisingiausius sprendimus.', '', 'https://www.w3schools.com/php/php_if_else.asp', 'sam222', '', ''),
(118, 'As nepatvirtintas...', '2024-04-05', 'masazass@gmail.com', 'Utena', 'Paskaita', 'BÅ«tina', ' Kartais tereikia tik nuoÅ¡irdaus Å¡ypsnio, gero Å¾odÅ¾io ar apkabinimo, kad pasikeistÅ³ emocinis fonas ir kitas Å¾mogus priimtÅ³ teisingiausius sprendimus.', '', 'https://www.w3schools.com/php/php_if_else.asp', 'sam222', '', ''),
(121, 'Indija - unikali patirÄiÅ³ ke', '2017-10-16', 'mahamati@ma.lt', 'Kaunas', 'Kita', 'BÅ«tina', 'Viena rimÄiausiÅ³ ir unikaliausiÅ³ Å¡iais metais AlcheminiÅ³ kelioniÅ³ su dvasinÄ—mis praktikomis ir paskaitomis Ä¯ IndijÄ….\r\n\r\nPagrindinÄ— registracija iki rugpjÅ«Äio 1 d.\r\nVisÅ³ anksÄiau keliavusiÅ³ su mumis gyvenimai labai praturtÄ—jo ir atneÅ¡Ä— daug neÄ¯kainojamos patirties, kaip ir mums patiems.\r\n\r\nSpalio 16 d. skrydis iÅ¡ Vilniaus Ä¯ Deli iÅ¡ ten Ä¯ Dehradun Å¡alia RiÅ¡ikeÅ¡o, apsistojimas RiÅ¡ikeÅ¡e.\r\n\r\nIndijoje gyvename 2 savaites.\r\nMaitinimas tris kartus dienoje.\r\n\r\nKasdienÄ… atlikinÄ—sime meditacijas kurias vesiu aÅ¡ Mart', '', 'https://www.facebook.com/events/448088918864828/?acontext=%7B%22ref%22%3A%2225%22%2C%22sid_reminder%22%3A%228871849459261112320%22%2C%22action_history%22%3A%22null%22%7D', 'sam456', '', ''),
(122, 'Masazai namuose', '2017-07-26', 'masazass@gmail.com', 'Å iauliai', 'Med. praktika, meditacija', 'BÅ«tina', 'hey', '', '', 'sam222', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skelbimai`
--
ALTER TABLE `skelbimai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skelbimai`
--
ALTER TABLE `skelbimai`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
