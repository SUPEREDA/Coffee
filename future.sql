-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-06 20:04:39
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `eda`
--

-- --------------------------------------------------------

--
-- 資料表結構 `future`
--

CREATE TABLE `future` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `mail` text NOT NULL,
  `birthday` date NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- 資料表的匯出資料 `future`
--

INSERT INTO `future` (`ID`, `username`, `password`, `name`, `mail`, `birthday`, `address`) VALUES
(1, 'joe', '851212', '', '', '0000-00-00', ''),
(4, 'john555', '555', 'john', 'john@gmail.com', '2017-06-15', '555111'),
(5, 'FUCK', '22', '靠', 'motherfucker@gmail.com', '2000-02-02', ''),
(6, 'EDA', 'EDA', 'EDA', 'ERdA@gamail.com', '2017-06-07', ''),
(7, '1G`', '1G', '1G', '1G@mail.comg', '2017-04-07', ''),
(8, '1DD', '1DD', '1DD', '1DD@GM', '0055-05-01', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `future`
--
ALTER TABLE `future`
  ADD PRIMARY KEY (`ID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `future`
--
ALTER TABLE `future`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
