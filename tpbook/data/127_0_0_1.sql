-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-14 04:31:34
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--
CREATE DATABASE IF NOT EXISTS `book` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `book`;

-- --------------------------------------------------------

--
-- 表的结构 `book_info`
--

CREATE TABLE `book_info` (
  `id` int(11) NOT NULL COMMENT '序号',
  `isbn` char(10) NOT NULL COMMENT '国际标准书号',
  `name` varchar(60) NOT NULL COMMENT '书名',
  `sortid` int(11) NOT NULL COMMENT '分类ID',
  `press` varchar(100) NOT NULL COMMENT '出版社',
  `author` varchar(50) NOT NULL COMMENT '作者',
  `price` varchar(8) NOT NULL COMMENT '价格',
  `pubtime` int(11) NOT NULL COMMENT '出版时间',
  `img` varchar(255) NOT NULL COMMENT '图片名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='图书信息表';

--
-- 转存表中的数据 `book_info`
--

INSERT INTO `book_info` (`id`, `isbn`, `name`, `sortid`, `press`, `author`, `price`, `pubtime`, `img`) VALUES
(1, '1561564165', '乡镇民用建筑实用设计', 1, '中国机械工业出版社', '刘德华', '15.00', 1458654568, 'book_01'),
(3, '1564566465', '大宋朝的妙人们', 2, '人民出版社', '三人行', '25.00', 1455415456, 'book_02'),
(4, '6354516465', '保险公司审计要领', 3, '中国财经出版社', '李小基', '20.00', 1485746546, 'book_03'),
(5, '6544123213', '健康生活知识问答', 4, '中国民族出版社', '陈涛', '10.00', 1466546988, 'book_04'),
(6, '185461654', '政治经济学（财经类)', 5, '中国人民出版社', '李云飞', '35.00', 1546546535, 'book_05'),
(7, '48554152', '党史进校园', 6, '中国人民出版社', '张端', '65.00', 1546546535, 'book_06');

-- --------------------------------------------------------

--
-- 表的结构 `book_sort`
--

CREATE TABLE `book_sort` (
  `id` int(11) NOT NULL COMMENT '序号',
  `name` varchar(30) NOT NULL COMMENT '分类名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='图书分类表';

--
-- 转存表中的数据 `book_sort`
--

INSERT INTO `book_sort` (`id`, `name`) VALUES
(1, '科技'),
(2, '文学'),
(3, '管理'),
(4, '保健'),
(5, '教育'),
(6, '党建');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_sort`
--
ALTER TABLE `book_sort`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `book_info`
--
ALTER TABLE `book_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `book_sort`
--
ALTER TABLE `book_sort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
