-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 06:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dec`
--

-- --------------------------------------------------------

--
-- Table structure for table `bazer_sche_tbl`
--

CREATE TABLE IF NOT EXISTS `bazer_sche_tbl` (
  `date` varchar(20) NOT NULL,
  `bs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bazer_sche_tbl`
--

INSERT INTO `bazer_sche_tbl` (`date`, `bs_id`) VALUES
('25/03/16', 0),
('24/03/16', 0),
('22/03/16', 0),
('22/03/16', 2),
('21/03/16', 1),
('22/03/16', 2),
('21/03/16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bazer_tbl`
--

CREATE TABLE IF NOT EXISTS `bazer_tbl` (
  `date` text NOT NULL,
  `b_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bazer_tbl`
--

INSERT INTO `bazer_tbl` (`date`, `b_id`, `description`, `amount`) VALUES
('22/01/16', 1, 'Fish', 500),
('22/04/16', 2, 'Fish', 300),
('22/04/16', 3, 'Meat', 700),
('22/03/16', 4, 'Vegetables', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `meal_tbl`
--

CREATE TABLE IF NOT EXISTS `meal_tbl` (
  `date` varchar(30) NOT NULL,
  `m_id` int(11) NOT NULL,
  `meal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_tbl`
--

INSERT INTO `meal_tbl` (`date`, `m_id`, `meal`) VALUES
('22/04/16', 1, 3),
('22/04/16', 2, 2),
('22/04/16', 3, 4),
('22/04/16', 4, 3),
('23/04/16', 1, 3),
('23/04/16', 2, 3),
('23/04/16', 3, 3),
('23/04/16', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `university` varchar(50) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `university`, `home_address`, `mobile_number`, `email`) VALUES
(1, 'Eshad Chowdhury', 'North South University', 'MouloviBazer', '01911111111', 'eshad@gmail.com'),
(2, 'Rafi Adnan', 'Brac University', 'Jatrabari, Dhaka.', '01811111111', 'rafi@gmail.com'),
(3, 'Masrur Mahin', 'Independent Universuty', 'Uttara, Dhaka', '0169999982', 'masrur@ymail.com'),
(4, 'Rabbi Ahmed', 'North South University', 'Central Road, Comilla. ', '01698741354', 'rabbi@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `member_notice`
--

CREATE TABLE IF NOT EXISTS `member_notice` (
  `m_n_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_notice`
--

INSERT INTO `member_notice` (`m_n_id`, `date`, `subject`, `description`) VALUES
(2, '22/12/16', '4wdfe', 'ewferfr'),
(1, '21/08/16', 'meal', 'hrejbfrjhef');

-- --------------------------------------------------------

--
-- Table structure for table `member_position`
--

CREATE TABLE IF NOT EXISTS `member_position` (
  `po_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  PRIMARY KEY (`po_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_position`
--

INSERT INTO `member_position` (`po_id`, `room_no`) VALUES
(1, 101),
(2, 102);

-- --------------------------------------------------------

--
-- Table structure for table `notice_tbl`
--

CREATE TABLE IF NOT EXISTS `notice_tbl` (
  `date` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_tbl`
--

INSERT INTO `notice_tbl` (`date`, `subject`, `description`) VALUES
('', 'Bazer', 'Today''s Bazer'),
('', 'Meal', 'Due to unavoidable circumstances, there will be no meal between sunday to tuesday.'),
('22/13/16', 'safds', 'wertfetertret');

-- --------------------------------------------------------

--
-- Table structure for table `others_bill_tbl`
--

CREATE TABLE IF NOT EXISTS `others_bill_tbl` (
  `o_id` int(11) NOT NULL,
  `utility` int(11) NOT NULL,
  `others` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others_bill_tbl`
--

INSERT INTO `others_bill_tbl` (`o_id`, `utility`, `others`) VALUES
(4, 200, 500),
(1, 100, 300),
(2, 300, 100);

-- --------------------------------------------------------

--
-- Table structure for table `payment_approve`
--

CREATE TABLE IF NOT EXISTS `payment_approve` (
  `slip_no` int(11) NOT NULL,
  `ap_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_approve`
--

INSERT INTO `payment_approve` (`slip_no`, `ap_id`, `approve`) VALUES
(0, 3, 1),
(0, 4, 0),
(0, 2, 1),
(5, 3, 1),
(4, 3, 1),
(10, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE IF NOT EXISTS `payment_tbl` (
  `slip_no` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `p_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`slip_no`, `date`, `p_id`, `amount`) VALUES
(0, '22/03/16', 1, 600),
(0, '21/03/16', 2, 800),
(0, '20/03/16', 4, 1000),
(5, '22/03/16', 4, 900);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
