-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-19 17:43:31
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `winery`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `whisky_name`
--

CREATE TABLE `whisky_name` (
  `id` int(10) NOT NULL,
  `winery_id` int(10) NOT NULL,
  `whiskey_brand` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `flavor` text NOT NULL,
  `jpge_where` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `winery_name`
--

CREATE TABLE `winery_name` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `winery_name`
--

INSERT INTO `winery_name` (`id`, `name`) VALUES
(1, 'Macallan'),
(2, 'ardbeg'),
(3, 'balvenie'),
(4, 'dalmore'),
(5, 'hibiki'),
(6, 'chita'),
(7, 'yamazaki'),
(8, 'talisker'),
(9, 'glenfiddich');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `whisky_name`
--
ALTER TABLE `whisky_name`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `winery_name`
--
ALTER TABLE `winery_name`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `whisky_name`
--
ALTER TABLE `whisky_name`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `winery_name`
--
ALTER TABLE `winery_name`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
