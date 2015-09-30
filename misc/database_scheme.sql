-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2015 at 10:19 PM
-- Server version: 10.1.7-MariaDB-1~trusty
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blockid` int(19) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `balance` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `balance`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `miners`
--

CREATE TABLE IF NOT EXISTS `miners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(64) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `hashrate` float(19,2) NOT NULL,
  `balance` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address` (`address`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `miners`
--

INSERT INTO `miners` (`id`, `address`, `ip`, `hashrate`, `balance`) VALUES
(1, '0x9284e52d64d888f2aa1bb62a38f3b5259487376a', '0.1.1.0', 0.00, '0');

-- --------------------------------------------------------

--
-- Table structure for table `miner_balance`
--

CREATE TABLE IF NOT EXISTS `miner_balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `miner` varchar(64) NOT NULL,
  `value` varchar(64) NOT NULL,
  `var_timestamp` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `miner_hashrate`
--

CREATE TABLE IF NOT EXISTS `miner_hashrate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `miner` varchar(64) NOT NULL,
  `hashrate` varchar(64) NOT NULL,
  `val_timestamp` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `miner` (`miner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payout_history`
--

CREATE TABLE IF NOT EXISTS `payout_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(64) NOT NULL,
  `balance` varchar(64) NOT NULL,
  `time` varchar(32) NOT NULL,
  `txid` varchar(128) NOT NULL,
  `fee` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address` (`address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pool_balance`
--

CREATE TABLE IF NOT EXISTS `pool_balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(64) NOT NULL,
  `var_timestamp` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pool_hashrate`
--

CREATE TABLE IF NOT EXISTS `pool_hashrate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hashrate` varchar(64) NOT NULL,
  `val_timestamp` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pool_miners`
--

CREATE TABLE IF NOT EXISTS `pool_miners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(64) NOT NULL,
  `var_timestamp` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pool_workers`
--

CREATE TABLE IF NOT EXISTS `pool_workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(64) NOT NULL,
  `var_timestamp` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blockid` bigint(19) NOT NULL,
  `address` varchar(64) NOT NULL,
  `minertarget` varchar(64) NOT NULL,
  `minerdiff` bigint(19) NOT NULL,
  `blockdiff` varchar(64) NOT NULL,
  `blockPowHash` varchar(128) NOT NULL,
  `realBlockTarget` varchar(128) NOT NULL,
  `nonceFound` varchar(64) NOT NULL,
  `FoundPowHash` varchar(128) NOT NULL,
  `Digest` varchar(128) NOT NULL,
  `seedhash` varchar(128) NOT NULL,
  `time` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nonceFound` (`nonceFound`),
  KEY `address` (`address`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shares_history`
--

CREATE TABLE IF NOT EXISTS `shares_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blockid` bigint(19) NOT NULL,
  `address` varchar(64) NOT NULL,
  `minertarget` varchar(64) NOT NULL,
  `minerdiff` bigint(19) NOT NULL,
  `blockdiff` varchar(64) NOT NULL,
  `blockPowHash` varchar(128) NOT NULL,
  `realBlockTarget` varchar(128) NOT NULL,
  `nonceFound` varchar(64) NOT NULL,
  `FoundPowHash` varchar(128) NOT NULL,
  `Digest` varchar(128) NOT NULL,
  `seedhash` varchar(128) NOT NULL,
  `time` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address` (`address`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shares_invalid`
--

CREATE TABLE IF NOT EXISTS `shares_invalid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blockid` bigint(19) NOT NULL,
  `address` varchar(64) NOT NULL,
  `minertarget` varchar(64) NOT NULL,
  `minerdiff` bigint(19) NOT NULL,
  `blockdiff` varchar(64) NOT NULL,
  `blockPowHash` varchar(128) NOT NULL,
  `realBlockTarget` varchar(128) NOT NULL,
  `nonceFound` varchar(64) NOT NULL,
  `FoundPowHash` varchar(128) NOT NULL,
  `Digest` varchar(128) NOT NULL,
  `seedhash` varchar(128) NOT NULL,
  `time` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address` (`address`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(64) NOT NULL,
  `userid` varchar(16) NOT NULL,
  `hashrate` varchar(64) NOT NULL,
  `val_timestamp` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
