-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-06-14 13:45:44
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--
CREATE DATABASE IF NOT EXISTS `member` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `member`;

-- --------------------------------------------------------

--
-- 表的结构 `question`
--
-- 创建时间： 2016-06-12 14:16:41
--

CREATE TABLE IF NOT EXISTS `question` (
  `u_id` int(11) NOT NULL COMMENT '账号ID',
  `q_1` varchar(200) NOT NULL COMMENT '问题1',
  `a_1` varchar(200) NOT NULL COMMENT '答案1',
  `q_2` varchar(200) NOT NULL COMMENT '问题2',
  `a_2` varchar(200) NOT NULL COMMENT '答案2',
  `q_3` varchar(200) NOT NULL COMMENT '问题3',
  `a_3` varchar(200) NOT NULL COMMENT '答案3',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='问题表';

-- --------------------------------------------------------

--
-- 表的结构 `users`
--
-- 创建时间： 2016-06-13 09:47:29
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(50) NOT NULL COMMENT '登录账号',
  `pass` varchar(50) NOT NULL COMMENT '登录密码',
  `regtime` date NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户登录表';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
