-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 26 日 17:30
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `payroll_table`
--

CREATE TABLE IF NOT EXISTS `payroll_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` int(2) NOT NULL,
  `workd` int(11) DEFAULT NULL,
  `workh` int(11) DEFAULT NULL,
  `kekkin` int(11) DEFAULT NULL,
  `tikokusoutai` int(11) DEFAULT NULL,
  `kyuuyo` int(11) DEFAULT NULL,
  `hikazeituukinhi` int(11) DEFAULT NULL,
  `kekkinkouzyo` int(11) DEFAULT NULL,
  `tikokusoutaikouzyo` int(11) DEFAULT NULL,
  `sousikyuu` int(11) DEFAULT NULL,
  `kazeisikyuu` int(11) DEFAULT NULL,
  `hikazeisikyuu` int(11) DEFAULT NULL,
  `kennkouhoken` int(11) DEFAULT NULL,
  `kaigohoken` int(11) DEFAULT NULL,
  `nenkinhoken` int(11) DEFAULT NULL,
  `koyouhoken` int(11) DEFAULT NULL,
  `ziyuminzei` int(11) DEFAULT NULL,
  `syotokuzei` int(11) DEFAULT NULL,
  `kouzyogoukei` int(11) DEFAULT NULL,
  `goukei` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `payroll_table`
--

INSERT INTO `payroll_table` (`id`, `name`, `month`, `workd`, `workh`, `kekkin`, `tikokusoutai`, `kyuuyo`, `hikazeituukinhi`, `kekkinkouzyo`, `tikokusoutaikouzyo`, `sousikyuu`, `kazeisikyuu`, `hikazeisikyuu`, `kennkouhoken`, `kaigohoken`, `nenkinhoken`, `koyouhoken`, `ziyuminzei`, `syotokuzei`, `kouzyogoukei`, `goukei`) VALUES
(3, '', 1, 16, 100, 0, 0, 200000, 10000, 0, 0, 210000, 200000, 10000, 13000, 300, 22000, 700, 8000, 1000, 45000, 165000),
(4, '', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '', 3, 10, 100, 0, 0, 100000, 10000, 0, 0, 110000, 100000, 10000, 10000, 300, 10000, 100, 8000, 0, 28400, 81600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payroll_table`
--
ALTER TABLE `payroll_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payroll_table`
--
ALTER TABLE `payroll_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
