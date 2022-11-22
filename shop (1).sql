-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022-11-22 05:45:53
-- サーバのバージョン： 10.4.25-MariaDB
-- PHP のバージョン: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kojin`
--

CREATE TABLE `kojin` (
  `ID` int(11) NOT NULL,
  `simei` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `furigana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yubinbango` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jusho` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `denwabango` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Emailaddress` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_staff`
--

CREATE TABLE `mst_staff` (
  `code` int(11) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `mst_staff`
--

INSERT INTO `mst_staff` (`code`, `name`, `password`) VALUES
(1, 'ろくまる', '12345678901234567890123456789012');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kojin`
--
ALTER TABLE `kojin`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `mst_staff`
--
ALTER TABLE `mst_staff`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kojin`
--
ALTER TABLE `kojin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `mst_staff`
--
ALTER TABLE `mst_staff`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
