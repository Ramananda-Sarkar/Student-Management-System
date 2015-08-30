-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2012 at 08:55 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `tpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_number` int(25) NOT NULL default '0',
  `reg_number` int(10) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `fa_name` varchar(50) NOT NULL,
  `mo_name` varchar(50) NOT NULL,
  `technology` varchar(20) NOT NULL,
  `session` varchar(10) NOT NULL,
  `contact_number` int(14) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `birth` varchar(15) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `village` varchar(25) NOT NULL,
  `post_office` varchar(25) NOT NULL,
  `police_station` varchar(25) NOT NULL,
  `district` varchar(20) NOT NULL,
  `p_status` varchar(45) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY  (`roll_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_number`, `reg_number`, `st_name`, `fa_name`, `mo_name`, `technology`, `session`, `contact_number`, `e_mail`, `birth`, `blood`, `village`, `post_office`, `police_station`, `district`, `p_status`, `image`) VALUES
(3333, 34534, 'saddam', 'sdf', 'sdaf', 'A.I.D.T', '2008-09', 54, 'sabbir.saddam@yahoo.com', '21-02-1111', 'sdf', 'ghj', 'sdg', 'sdg', 'sdaf', 'munsirhat', 'av-3757.gif'),
(22, 23, '22', 'ere', 'ere', 'R.A.C', '2008-09', 0, 'ear', '11-10-1994', 'ere', '22', 'err', 'd', 'Dinajpur', 'Thakurgaon', 'A_Dreamy_World_6th.jpg'),
(123, 321, 'TS', 'Fa', 'na', 'Computer', '2008-09', 12345, 'dddew@gmail.com', '11-10-1994', 'A+', 'Mul', 'Setab', 'Bocha', 'Dinajpur', 'Thakurgoan', '21.gif'),
(1234, 422, 'ewe', 'ewrewewr', 'ewrew', 'Computer', '2008-09', 0, 'ewrwe', '11-10-1994', 'ewrw', 'aere', 'ewarew', 'aerwe', 'aewreaw', 'rewaew', 'Horse.jpg'),
(12345, 54321, 'weewrfew', 'dfds', 'ews', 'Food', '2008-09', 1223, 'ere', '11-10-1991', 'er3', 'erwe', 'ewe', 'www', 'ere', 'dd', '08.gif'),
(111111, 1111, 'sss', 'aerw', 'ewr', 'Computer', '2008-09', 0, 'ewre', 'df', 'erew', 'df', 'ere', 'dfd', 'ewrwe', 'asdfwe', '06.gif'),
(132, 12, 'dd', 'sea', 'set', 'Food', '2008-09', 0, 'drs', '12', 'dr', '2sd', 'er', 'adf', 'ghrtr', 'dfa', 'horse0172392137.gif'),
(2000, 454, 'ba', 'daf', 'dfa', 'R.A.C', '2010-11', 0, 'dfda', '12', 'dfd', 'aere', 'dafa', 'fsda', 'Dinajpur', 'rajshahi', '17.gif');
