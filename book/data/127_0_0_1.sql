-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-15 09:44:53
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
(1, '9875734947', '正面战场中原抗战', 6, '中国文学出版社', '张三', '25.00', 1467453444, 'book_01.jpg'),
(2, '9348484382', '李岚清教育访谈录', 5, '人民出版社', '李岚清', '30.00', 1467453555, 'book_02.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `book_sort`
--
ALTER TABLE `book_sort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
