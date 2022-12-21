-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-21 08:49:07
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

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
  `user_name` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_password` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_password`, `email`, `name`) VALUES
(2, 'admin', 'admin', 'minder309@gmail.com', '趙培堯'),
(3, 'minder309', '12345678', 'minder310@hotmail.com', '星星');

-- --------------------------------------------------------

--
-- 資料表結構 `whisky_name`
--

CREATE TABLE `whisky_name` (
  `id` int(10) NOT NULL COMMENT '編號',
  `winery_id` int(10) NOT NULL COMMENT '酒廠編號',
  `whiskey_brand` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '酒名',
  `price` int(20) NOT NULL COMMENT '價格',
  `cp` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT 'cp值',
  `flavor` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '風味評價',
  `jpge_where` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '圖片放哪裡'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `whisky_name`
--

INSERT INTO `whisky_name` (`id`, `winery_id`, `whiskey_brand`, `price`, `cp`, `flavor`, `jpge_where`) VALUES
(1, 1, '紫鑽12年', 28000, '1', '口感有強烈甜感，以太妃糖為主，也因為是使用小型雪莉統陳年，所以在年分上遠超12年口感，但因停產關係，現今價格大漲，導致供貨緊張，由剛出的一瓶不到2000元至今已經封漲超過10倍。', '123456789'),
(2, 7, '山崎18年', 48000, '1', '日本經典水樽桶加雪莉桶味道，有檀香，太妃糖，線香，等香味，油旨感豐厚，尾韻長，但價格過高目前也漲價超過10倍', '123456789'),
(3, 1, '麥卡倫三桶12年', 1250, '6', '經典麥卡倫，平衡感做得非常好，有蜂蜜香甜味，輕微花香，與雪莉桶後味', '123456789');

-- --------------------------------------------------------

--
-- 資料表結構 `winery_name`
--

CREATE TABLE `winery_name` (
  `id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL
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
(9, 'glenfiddich'),
(10, 'orma');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `whisky_name`
--
ALTER TABLE `whisky_name`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `winery_name`
--
ALTER TABLE `winery_name`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
