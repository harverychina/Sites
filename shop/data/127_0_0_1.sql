-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-10 16:11:29
-- 服务器版本： 5.7.13
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- 表的结构 `shop_category`
--
-- 创建时间： 2016-11-03 07:19:50
-- 最后更新： 2016-11-04 07:42:30
--

CREATE TABLE `shop_category` (
  `id` int(11) NOT NULL COMMENT '序号',
  `name` varchar(100) NOT NULL COMMENT '分类名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类表';

--
-- 转存表中的数据 `shop_category`
--

INSERT INTO `shop_category` (`id`, `name`) VALUES
(2, '小说'),
(3, '科技'),
(4, '文学'),
(5, '动漫'),
(6, '青春'),
(7, '心理学'),
(8, '经济'),
(9, '管理学'),
(10, '育儿'),
(14, '成人教育');

-- --------------------------------------------------------

--
-- 表的结构 `shop_desc`
--
-- 创建时间： 2016-11-10 15:10:14
-- 最后更新： 2016-11-10 15:10:19
--

CREATE TABLE `shop_desc` (
  `good_id` int(11) NOT NULL COMMENT '商品ID',
  `height` varchar(4) NOT NULL COMMENT '高',
  `width` varchar(4) NOT NULL COMMENT '宽',
  `feature` varchar(255) NOT NULL COMMENT '特征'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品描述';

-- --------------------------------------------------------

--
-- 表的结构 `shop_good`
--
-- 创建时间： 2016-11-10 13:26:35
-- 最后更新： 2016-11-10 15:10:19
--

CREATE TABLE `shop_good` (
  `id` int(11) NOT NULL COMMENT '商品ID',
  `name` varchar(255) NOT NULL COMMENT '商品名',
  `price` decimal(6,2) NOT NULL COMMENT '商品价格',
  `status` tinyint(4) NOT NULL COMMENT '商品状态',
  `time` int(11) NOT NULL COMMENT '上架时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品表';

-- --------------------------------------------------------

--
-- 表的结构 `shop_member`
--
-- 创建时间： 2016-10-28 06:28:42
--

CREATE TABLE `shop_member` (
  `user_id` varchar(40) NOT NULL COMMENT '账号',
  `user_pass` varchar(32) NOT NULL COMMENT '密码',
  `user_gender` tinyint(2) NOT NULL COMMENT '性别',
  `user_add` varchar(255) NOT NULL COMMENT '配送地址',
  `user_tel` char(11) NOT NULL COMMENT '联系电话',
  `user_img` varchar(255) NOT NULL COMMENT '头像',
  `flag` tinyint(1) NOT NULL COMMENT '用户类型: 1 管理员 2 普通用户',
  `time` int(11) NOT NULL COMMENT '注册时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `shop_member`
--

INSERT INTO `shop_member` (`user_id`, `user_pass`, `user_gender`, `user_add`, `user_tel`, `user_img`, `flag`, `time`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1, '', '', '', 1, 1463535335);

-- --------------------------------------------------------

--
-- 表的结构 `shop_store`
--
-- 创建时间： 2016-11-02 07:14:36
--

CREATE TABLE `shop_store` (
  `id` int(11) NOT NULL COMMENT '序号',
  `name` varchar(100) NOT NULL COMMENT '商家名',
  `address` varchar(255) NOT NULL COMMENT '商家地址',
  `tel` char(11) NOT NULL COMMENT '商家电话',
  `time` int(11) NOT NULL COMMENT '加盟时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商家表';

--
-- 转存表中的数据 `shop_store`
--

INSERT INTO `shop_store` (`id`, `name`, `address`, `tel`, `time`) VALUES
(1, '1', '1', '13800138000', 1478070916),
(2, '2', '2', '13500135000', 1478093002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_desc`
--
ALTER TABLE `shop_desc`
  ADD PRIMARY KEY (`good_id`);

--
-- Indexes for table `shop_good`
--
ALTER TABLE `shop_good`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_member`
--
ALTER TABLE `shop_member`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `shop_store`
--
ALTER TABLE `shop_store`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `shop_category`
--
ALTER TABLE `shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `shop_desc`
--
ALTER TABLE `shop_desc`
  MODIFY `good_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品ID';
--
-- 使用表AUTO_INCREMENT `shop_good`
--
ALTER TABLE `shop_good`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品ID';
--
-- 使用表AUTO_INCREMENT `shop_store`
--
ALTER TABLE `shop_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
