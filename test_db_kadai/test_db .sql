-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 2 月 14 日 15:57
-- サーバのバージョン： 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `test_table`
--

CREATE TABLE `test_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `q6` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `test_table`
--

INSERT INTO `test_table` (`id`, `name`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `score`) VALUES
(72, '大塚', 'q1_1', 'q2_2', 'q3_3', '', '', '', 1),
(73, ' 田中', 'q1_1', 'q2_2', 'q3_3', 'q4_2', 'q5_1', 'q6_2', 2),
(74, '井上', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_1', 'q6_1', 6),
(75, '鈴木', 'q1_2', 'q2_2', 'q3_2', 'q4_2', 'q5_2', 'q6_2', 0),
(76, ' 吉田', 'q1_1', 'q2_2', 'q3_1', 'q4_2', 'q5_1', 'q6_2', 3),
(77, '上茶谷', 'q1_1', 'q2_2', 'q3_3', 'q4_4', 'q5_1', 'q6_2', 2),
(78, '山田', 'q1_1', 'q2_2', 'q3_1', 'q4_2', 'q5_3', 'q6_4', 2),
(79, '大塚', 'q1_1', 'q2_2', 'q3_3', 'q4_1', 'q5_2', 'q6_3', 2),
(80, '大塚', 'q1_1', 'q2_2', 'q3_2', 'q4_2', 'q5_3', 'q6_2', 1),
(81, '高橋', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_1', 'q6_1', 6),
(82, '太田', 'q1_1', 'q2_1', 'q3_1', 'q4_2', 'q5_2', 'q6_2', 3),
(83, '大塚', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_1', 'q6_1', 6),
(84, '山田', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_1', 'q6_1', 6),
(85, '田中', 'q1_1', 'q2_2', 'q3_3', 'q4_3', 'q5_1', 'q6_1', 3),
(86, '大塚　辰徳', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_1', 'q6_1', 6),
(87, '松井　秀樹', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_1', 'q6_1', 6),
(88, '佐藤', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_2', 'q6_2', 4),
(89, 'iwasaki', 'q1_1', 'q2_1', 'q3_1', 'q4_1', 'q5_1', 'q6_1', 6),
(90, '中山', 'q1_1', 'q2_2', 'q3_1', 'q4_1', 'q5_2', 'q6_1', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_table`
--
ALTER TABLE `test_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_table`
--
ALTER TABLE `test_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
