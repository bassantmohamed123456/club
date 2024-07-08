-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 يوليو 2024 الساعة 21:15
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- بنية الجدول `complaints`
--

CREATE TABLE `complaints` (
  `id-com` int(8) NOT NULL,
  `con-com` varchar(100) NOT NULL,
  `id-mem` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `complaints`
--

INSERT INTO `complaints` (`id-com`, `con-com`, `id-mem`) VALUES
(1, 'ليست مواعيده متاحة طوال الوقت', 2020209);

-- --------------------------------------------------------

--
-- بنية الجدول `games`
--

CREATE TABLE `games` (
  `id-game` int(8) NOT NULL,
  `name-game` char(20) NOT NULL,
  `price-game` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `games`
--

INSERT INTO `games` (`id-game`, `name-game`, `price-game`) VALUES
(102030, 'كرة القدم', '1000'),
(102040, 'كرة السلة', '1000'),
(102050, 'السباحة', '1500'),
(102060, 'التنس', '2000'),
(102070, 'اسكواش', '2500'),
(102080, 'الريشة', '2000');

-- --------------------------------------------------------

--
-- بنية الجدول `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(8) NOT NULL,
  `name-mem` varchar(30) NOT NULL,
  `date-invoice` date NOT NULL,
  `id-mem` int(8) NOT NULL,
  `id-game` int(8) NOT NULL,
  `price` int(20) NOT NULL,
  `id-stad` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `name-mem`, `date-invoice`, `id-mem`, `id-game`, `price`, `id-stad`) VALUES
(20, 'Ibrahim Ashraf', '2024-03-06', 2020209, 102060, 100, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `member`
--

CREATE TABLE `member` (
  `id-mem` int(8) NOT NULL,
  `name-mem` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date DEFAULT NULL,
  `address-mem` varchar(30) DEFAULT NULL,
  `phone-mem` char(15) NOT NULL,
  `gender` char(10) NOT NULL,
  `id-stad` int(8) DEFAULT NULL,
  `from-date` date NOT NULL,
  `to-date` date NOT NULL,
  `price-stad` char(20) NOT NULL,
  `national` char(14) NOT NULL,
  `type_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `member`
--

INSERT INTO `member` (`id-mem`, `name-mem`, `email`, `date`, `address-mem`, `phone-mem`, `gender`, `id-stad`, `from-date`, `to-date`, `price-stad`, `national`, `type_member`) VALUES
(1010108, 'Bassant Momhamed', 'bm@gmail.com', '2024-03-14', 'الزاوية الحمراء', '01023659874', 'female', 10407020, '2024-03-06', '2024-04-07', '150', '20301056875463', 1),
(1010109, 'Esraa Ibrahim', 'es@gmail.com', '2024-03-07', 'السويس', '01065329874', 'female', 10407020, '2024-02-29', '2024-03-21', '100', '20306050846521', 1),
(2020209, 'Ibrahim_Ashraf ', 'ib@gamil.com', '0000-00-00', 'عين شمس', '01023697458', 'male', 20306050, '0000-00-00', '0000-00-00', '150', '10203056924139', 2),
(10101010, 'Habiba Reda', 'ha@gmail.com', '2024-03-06', 'شبرا الخيمة', '01036495612', 'female', NULL, '0000-00-00', '0000-00-00', '', '20304056987456', 1),
(20202010, 'Salsabil Mohamed', 'sa@gmail.com', '2024-03-16', 'السلام', '01023659874', 'female', NULL, '0000-00-00', '0000-00-00', '', '20306050846521', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `member-games`
--

CREATE TABLE `member-games` (
  `id-game-member` int(20) NOT NULL,
  `id-mem` int(8) NOT NULL,
  `id-game` int(8) NOT NULL,
  `from-date` date NOT NULL,
  `to-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `member-games`
--

INSERT INTO `member-games` (`id-game-member`, `id-mem`, `id-game`, `from-date`, `to-date`) VALUES
(1, 2020209, 102030, '2024-03-14', '2024-03-31');

-- --------------------------------------------------------

--
-- بنية الجدول `member-traniers`
--

CREATE TABLE `member-traniers` (
  `id-mem` int(8) NOT NULL,
  `id-tranier` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `stadiums`
--

CREATE TABLE `stadiums` (
  `id-stad` int(8) NOT NULL,
  `name-stad` char(20) NOT NULL,
  `price-stad` char(20) NOT NULL,
  `id-game` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `stadiums`
--

INSERT INTO `stadiums` (`id-stad`, `name-stad`, `price-stad`, `id-game`) VALUES
(10407020, 'ملعب كرة السلة', '200', 102040),
(10506020, 'ملعب كرة القدم', '150', 102030),
(20306050, 'ملعب التنس', '250', 102060);

-- --------------------------------------------------------

--
-- بنية الجدول `trainers`
--

CREATE TABLE `trainers` (
  `id-tranier` int(8) NOT NULL,
  `name-tranier` varchar(50) NOT NULL,
  `phone-tranier` char(15) NOT NULL,
  `address-tranier` varchar(40) DEFAULT NULL,
  `salary` char(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `id-game` int(8) DEFAULT NULL,
  `national` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `trainers`
--

INSERT INTO `trainers` (`id-tranier`, `name-tranier`, `phone-tranier`, `address-tranier`, `salary`, `email`, `id-game`, `national`) VALUES
(1010108, 'Ibrahim Ashraf', '010236598745', 'عين شمس', '3000', 'ibm@gmail.com', NULL, '10203056924139'),
(1010109, 'Bassant Mohamed', '01023675412', 'الزاوية الحمراء', '3000', 'bma@gamil.com', NULL, '20103097658412');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id-com`),
  ADD KEY `id-mem` (`id-mem`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id-game`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id-mem` (`id-mem`),
  ADD KEY `id-game` (`id-game`),
  ADD KEY `id-stad` (`id-stad`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id-mem`),
  ADD KEY `id-stad` (`id-stad`);

--
-- Indexes for table `member-games`
--
ALTER TABLE `member-games`
  ADD PRIMARY KEY (`id-game-member`),
  ADD KEY `id-mem` (`id-mem`),
  ADD KEY `id-game` (`id-game`);

--
-- Indexes for table `member-traniers`
--
ALTER TABLE `member-traniers`
  ADD KEY `id-mem` (`id-mem`),
  ADD KEY `id-tranier` (`id-tranier`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`id-stad`),
  ADD KEY `id-game` (`id-game`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id-tranier`),
  ADD KEY `id-game` (`id-game`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id-com` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `member-games`
--
ALTER TABLE `member-games`
  MODIFY `id-game-member` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`id-mem`) REFERENCES `member` (`id-mem`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- قيود الجداول `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id-mem`) REFERENCES `member` (`id-mem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id-game`) REFERENCES `games` (`id-game`);

--
-- قيود الجداول `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id-stad`) REFERENCES `stadiums` (`id-stad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- قيود الجداول `member-games`
--
ALTER TABLE `member-games`
  ADD CONSTRAINT `member-games_ibfk_1` FOREIGN KEY (`id-game`) REFERENCES `games` (`id-game`),
  ADD CONSTRAINT `member-games_ibfk_2` FOREIGN KEY (`id-mem`) REFERENCES `member` (`id-mem`);

--
-- قيود الجداول `member-traniers`
--
ALTER TABLE `member-traniers`
  ADD CONSTRAINT `member-traniers_ibfk_1` FOREIGN KEY (`id-mem`) REFERENCES `member` (`id-mem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member-traniers_ibfk_2` FOREIGN KEY (`id-tranier`) REFERENCES `trainers` (`id-tranier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- قيود الجداول `stadiums`
--
ALTER TABLE `stadiums`
  ADD CONSTRAINT `stadiums_ibfk_1` FOREIGN KEY (`id-game`) REFERENCES `games` (`id-game`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- قيود الجداول `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainers_ibfk_1` FOREIGN KEY (`id-game`) REFERENCES `games` (`id-game`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
