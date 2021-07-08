-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 7 月 08 日 16:18
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `agusys`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(12) NOT NULL,
  `staffname` char(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `staff_table`
--

INSERT INTO `staff_table` (`id`, `staffname`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'chell', 'beerbeer11', 1, 0, '2021-07-04 17:10:24', '2021-07-08 19:02:28'),
(2, 'charu', '28nouguisu', 0, 0, '2021-07-04 17:13:12', '2021-07-08 21:13:06'),
(3, 'cherry', '31024ki', 0, 0, '2021-07-04 22:34:29', '2021-07-04 22:34:29'),
(8, 'wakame', 'oniichanzurui', 0, 0, '2021-07-08 22:47:31', '2021-07-08 22:47:31'),
(9, 'yonnu', 'bloccolibloccoli83', 1, 0, '2021-07-08 22:53:37', '2021-07-08 23:09:27'),
(10, 'koitan', 'kakeh@shi', 0, 0, '2021-07-08 22:55:03', '2021-07-08 22:55:03');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
