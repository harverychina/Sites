-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-30 03:30:03
-- 服务器版本： 5.7.13
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--
CREATE DATABASE IF NOT EXISTS `vote` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `vote`;

-- --------------------------------------------------------

--
-- 表的结构 `vote_info`
--

CREATE TABLE IF NOT EXISTS `vote_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(50) NOT NULL COMMENT '姓名',
  `gender` tinyint(1) NOT NULL COMMENT '性别',
  `now_posit` varchar(50) NOT NULL COMMENT '现任职位',
  `run_posit` varchar(50) NOT NULL COMMENT '竞选职位',
  `number` int(11) NOT NULL COMMENT '票数',
  `flag` tinyint(1) NOT NULL COMMENT '标志',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='投票表';

--
-- 转存表中的数据 `vote_info`
--

INSERT INTO `vote_info` (`id`, `name`, `gender`, `now_posit`, `run_posit`, `number`, `flag`) VALUES
(1, '张三', 1, '某科室主管', '某科室主任', 0, 1),
(2, '李四', 2, '某科室主管', '某科室主任', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
